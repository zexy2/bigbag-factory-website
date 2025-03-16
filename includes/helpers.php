function getWebPImage($imagePath) {
    $webpPath = preg_replace('/\.(jpe?g|png)$/i', '.webp', $imagePath);
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $webpPath)) {
        return $webpPath;
    }
    return $imagePath;
} 