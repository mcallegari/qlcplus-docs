function Update-MarkdownHeadingLevels {
    param (
        [string]$markdown
    )
    
    # Split the Markdown content into lines
    $lines = $markdown -split "`n"
    
    # Iterate through each line
    for ($i = 0; $i -lt $lines.Count; $i++) {
        $line = $lines[$i]
        
        # Check if the line is a heading
        if ($line -match '^(#+)(.*)$') {
            $prefix = $matches[0]
            
            # Increment the heading level
            $newPrefix = '#' + $prefix
            
            # Replace the original line with the modified line
            $lines[$i] = $newPrefix
        }
    }
    
    # Join the lines back into a single string
    $newMarkdown = $lines -join "`n"
    
    return $newMarkdown
}

function Remove-Metadata {
    Param (
        [string]$Content,
        [string]$BasePath
    )
    # Extract the title before cleaning
    # $title = if ($Content -match "title:\s*'(.+?)'") {$matches[1]}
    # Correctly remove YAML metadata from markdown content
    $cleanContent = $Content -replace '^---[\s\S]*?---', ''

    # Find and replace relative image paths with absolute paths
    $pattern = '!\[(?:.*?)\]\((?:\.\.?\/)?(.*?\.(png|jpg|svg|webp|webm|jpeg|gif))\s*(?:".*?")?\)'
    $imagePaths = Select-String -InputObject $cleanContent -Pattern $pattern -AllMatches
    
    if ($imagePaths.Matches) {
        foreach ($match in $imagePaths.Matches) {
            $relativePath = $match.Groups[1].Value
            # Normalize the path
            $absolutePath = "images/" + (Split-Path -Path $relativePath -Leaf)
            # Replace the markdown image syntax with the new path
            $imageMarkdown = "![]($absolutePath)"
            $cleanContent = $cleanContent.Replace($match.Value, $imageMarkdown)
        }
    }

    # Increment headings.
    $cleanContent = Update-MarkdownHeadingLevels($cleanContent)
    # Add the title back in H1 style if it was found
    if ($title) {
        $cleanContent = "## $title`n`n" + $cleanContent
    }
    
    return $cleanContent
}

function Get-MarkdownFiles {
    Param (
        [string]$Path,
        [string]$Lang
    )
    Write-Host "Getting all markdown files from the $path directory..."
    if (Test-Path $Path -PathType Container) {
        # Get the list of folders in the directory (feed is excluded as it's a stub for RSS)
        $folders = Get-ChildItem -Path $Path -Directory -Exclude feed
        $markdownFiles = @()

        # Iterate over each folder
        foreach ($folder in $folders) {
            # Output the folder name
            #Write-Host "Folder name: $($folder.FullName)"

            $markdownFiles += Get-ChildItem -Path ($folder.FullName + "\chapter.v4.md")
            $markdownFiles += Get-ChildItem -Path ($folder.FullName) -Recurse -File | Where-Object { $_.Name -match "default\.v4\.md|docs\.md"} | Sort-Object FullName
        }
    } else {
        Write-Host "Directory not found: $directory"
        return
    }
    
    $cleanMarkdownFiles = @()
    foreach ($file in $markdownFiles) {
        $content = Get-Content $file.FullName -Raw
        $cleanContent = Remove-Metadata $content
        if(-not [string]::IsNullOrWhiteSpace($cleanContent)) {
            $cleanMarkdownFiles += [PSCustomObject]@{
                Path    = $file.FullName
                Content = $cleanContent
            }
            #Write-Host "Processed file: $($file.FullName)"
        } else {
            Write-Host "No content after cleaning metadata for: $($file.FullName)"
        }
    }
    return $cleanMarkdownFiles
}

function Merge-MarkdownFiles {
    Param ( [Array] $MarkdownFiles, 
            [string] $OutputPath,
            [string] $directoryPath 
    )
    $combinedContent = ""
    foreach ($file in $MarkdownFiles) {
        $combinedContent += $file.Content + "`n`n"
    }
    # Fix Chapters to make them H1
    $combinedContent = $combinedContent -replace '####\sChapter', '# Chapter'

    # Replace Headings like "Chapter 1" with "01. Basics"
    $combinedContent = Set-ChapterTitles -MarkdownContent $combinedContent -FolderPath $directoryPath

    #Write combined markdown
    $combinedContent | Out-File -FilePath $OutputPath -Encoding UTF8
    Write-Host "Combined markdown written to $OutputPath"
}

function Set-ChapterTitles {
    Param (
        [string]$MarkdownContent,
        [string]$FolderPath
    )
    Write-Host "Replacing '# Chapter x' headings with directory names..."
    # Get the list of subfolders (feed is excluded as it's a stub for RSS)
    $subfolders = Get-ChildItem -Path $FolderPath -Directory -Exclude feed | Sort-Object Name

    # Split the markdown content into an array of lines
    $markdownLines = $markdownContent -split "\r?\n"

    # Iterate through each subfolder and update the markdown content
    for ($i = 0; $i -lt $subfolders.Count; $i++) {
        $folder = $subfolders[$i]
        $folderName = Format-ChapterName -inputString $folder.Name

    
        # Find the index of the existing heading in the markdown content
        $headingIndex = $markdownLines.IndexOf("# Chapter $($i + 1)")

        if ($headingIndex -ge 0) {
            $markdownLines[$headingIndex] = "# $folderName"
        }
    }

    # Join the updated markdown lines into a single string
    $updatedMarkdownContent = $markdownLines -join "`r`n"

    return $updatedMarkdownContent
}

function Format-ChapterName {
    param (
        [string]$inputString
    )

    # Check if the input string matches the pattern
    if ($inputString -match '^(\d+)\.([a-zA-Z]+(?:-[a-zA-Z]+)*)$') {
        $number = $Matches[1]
        $words = $Matches[2] -split '-'

        # Capitalize the first word
        $words[0] = $words[0].Substring(0,1).ToUpper() + $words[0].Substring(1)

        # Join words with spaces
        $formattedString = $words -join ' '

        # Add space after the period
        $formattedString = "$number. $formattedString"

        return $formattedString
    }
    else {
        Write-Host "Input string doesn't match the expected pattern." -ForegroundColor Red
    }
}

function Copy-ImagesToDirectory {
    param (
        [string]$sourceDirectory,
        [string]$destinationDirectory
    )
    Write-Host "Copying images..."
    # Clear the destination directory if it exists
    if (Test-Path $destinationDirectory) {
        Remove-Item -Path $destinationDirectory -Recurse -Force
    }

    # Create the destination directory
    New-Item -ItemType Directory -Path $destinationDirectory | Out-Null

    # Define an array of image file extensions
    $imageExtensions = @('*.webp', '*.webm', '*.jpg', '*.jpeg', '*.png', '*.svg')

    # Get all image files recursively from the source directory
    $imageFiles = Get-ChildItem -Path $sourceDirectory -Include $imageExtensions -File -Recurse

    # Loop through each image file
    foreach ($image in $imageFiles) {
        # Copy the image file to the destination directory
        Copy-Item -Path $image.FullName -Destination $destinationDirectory
    }
}


$directoryPath  = "./pages/"                                                    # Path To Grav Documentation
$imageDir       = "./.github/workflows/bin/markdown/images/"                        # Path to where images should go
$outputFile     = "./.github/workflows/bin/markdown/qlcplus-docs.md"  # Path to where you want your damn markdown ;)


# Move all image files into ./images so they can be found
Copy-ImagesToDirectory -sourceDirectory $directoryPath -destinationDirectory $imageDir

# Process and combine markdown files
$markdownFiles = Get-MarkdownFiles -Path $directoryPath -Lang "EN"
Merge-MarkdownFiles -MarkdownFiles $markdownFiles -OutputPath $outputFile -directoryPath $directoryPath