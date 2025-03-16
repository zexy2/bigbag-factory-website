@echo off
set WEBP_PATH=C:\Users\90546\Desktop\WebP\bin\cwebp.exe

echo WebP dönüşümü başlıyor...

:: Ürün görselleri için
cd /d "C:\Users\90546\Desktop\cuval22\assets\images\products"
echo Ürün görselleri dönüştürülüyor...
for %%i in (*.jpg) do (
    echo %%i dönüştürülüyor...
    "%WEBP_PATH%" -q 85 "%%i" -o "%%~ni.webp"
)
for %%i in (*.png) do (
    echo %%i dönüştürülüyor...
    "%WEBP_PATH%" -q 85 "%%i" -o "%%~ni.webp"
)

:: Banner görselleri için
cd /d "C:\Users\90546\Desktop\cuval22\assets\images"
echo Banner görselleri dönüştürülüyor...
"%WEBP_PATH%" -q 85 web-banner4.jpg -o web-banner4.webp
"%WEBP_PATH%" -q 85 bags.jpg -o bags.webp
"%WEBP_PATH%" -q 85 profosyonelHizmet1.jpg -o profosyonelHizmet1.webp

:: Logo için (yüksek kalite)
cd /d "C:\Users\90546\Desktop\cuval22\assets\images\logo"
echo Logo dönüştürülüyor...
"%WEBP_PATH%" -q 95 logo.png -o logo.webp

echo Dönüşüm tamamlandı!
echo Kontrol ediliyor...

:: PHP kontrol scriptini çalıştır
cd /d "C:\Users\90546\Desktop\cuval22"
php check-webp.php

pause