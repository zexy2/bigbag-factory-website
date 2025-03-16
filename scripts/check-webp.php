<?php
function checkWebPConversion($directory) {
    $missing = [];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory)
    );

    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $path = $file->getPathname();
            if (preg_match('/\.(jpg|jpeg|png)$/i', $path)) {
                $webp = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);
                if (!file_exists($webp)) {
                    $missing[] = $path;
                }
            }
        }
    }
    return $missing;
}

$missingWebP = checkWebPConversion('assets/images');
if (count($missingWebP) > 0) {
    echo "Eksik WebP dosyaları:\n";
    foreach ($missingWebP as $file) {
        echo "- $file\n";
    }
} else {
    echo "Tüm görseller için WebP versiyonları mevcut.\n";
}
?> 