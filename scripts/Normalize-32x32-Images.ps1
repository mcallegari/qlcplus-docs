# Define target width, height, and DPI
$targetWidth = 32
$targetHeight = 32
$targetDpi = 96

# Define the source and destination directories
$sourceDir = "C:\Development\qlcplus-docs\pages"

# Function to resize and normalize image with transparency support (editing in place)
function Normalize-Image {
    param (
        [string]$inputPath
    )
    try {
        # Load the image
        $image = [System.Drawing.Image]::FromFile($inputPath)

        # Check if the image is 32x32 pixels
        if ($image.Width -eq 32 -and $image.Height -eq 32) {
            Write-Host "Processing 32x32 image: $inputPath"

            # Create a new bitmap with the target size and set the pixel format to support transparency
            $normalizedImage = New-Object System.Drawing.Bitmap($targetWidth, $targetHeight, [System.Drawing.Imaging.PixelFormat]::Format32bppArgb)

            # Set the DPI
            $normalizedImage.SetResolution($targetDpi, $targetDpi)

            # Create a graphics object from the new bitmap
            $graphics = [System.Drawing.Graphics]::FromImage($normalizedImage)
            $graphics.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
            $graphics.CompositingQuality = [System.Drawing.Drawing2D.CompositingQuality]::HighQuality
            $graphics.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality

            # Ensure the background is transparent by clearing it
            $graphics.Clear([System.Drawing.Color]::Transparent)

            # Draw the original image on the new bitmap with resizing
            $graphics.DrawImage($image, 0, 0, $targetWidth, $targetHeight)

            # Save the normalized image (PNG format to retain transparency), overwriting the original file
            $normalizedImage.Save($inputPath, [System.Drawing.Imaging.ImageFormat]::Png)

            # Dispose of objects to free memory
            $graphics.Dispose()
            $image.Dispose()
            $normalizedImage.Dispose()

            Write-Host "Successfully normalized (with transparency): $inputPath"
        }
        else {
            Write-Host "Skipping non 32x32 image: $inputPath"
        }
    }
    catch {
        Write-Host "Error processing image: $inputPath - $_"
    }
}

# Process all images in the source directory
Get-ChildItem -Path $sourceDir -Filter *.png | ForEach-Object {
    $inputFile = $_.FullName

    # Normalize the image if it is 32x32, and overwrite the original file
    Normalize-Image -inputPath $inputFile
}

Write-Host "Image normalization completed."
