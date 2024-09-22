# Define the folder path
$folderPath = "C:\Development\qlcplus-docs\pages"

# Load the System.Drawing assembly
Add-Type -AssemblyName System.Drawing

# Get all image files recursively in the folder (supports common image formats)
$imageFiles = Get-ChildItem -Path $folderPath -Include *.jpg, *.jpeg, *.png, *.tiff, *.bmp -Recurse

# Create an array to store results
$result = @()

# Loop through each image and extract DPI, width, and height information
foreach ($imageFile in $imageFiles) {
    try {
        # Load the image
        $image = [System.Drawing.Image]::FromFile($imageFile.FullName)

        # Extract DPI, width, and height values
        $dpiX = $image.HorizontalResolution
        $width = $image.Width
        $height = $image.Height

        # Create a custom object with the required columns
        $result += [PSCustomObject]@{
            ImageName = $imageFile.Name
            DPI = $dpiX
            Width = $width
            Height = $height
            FilePath = $imageFile.FullName
        }

        # Dispose of the image object to free memory
        $image.Dispose()
    } catch {
        Write-Output "Error processing $($imageFile.FullName): $_"
    }
}

# Output the results in a table format
$result | Format-Table ImageName, DPI, Width, Height, FilePath -AutoSize