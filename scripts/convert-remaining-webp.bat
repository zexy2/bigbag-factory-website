@echo off
set WEBP_PATH=C:\Users\90546\Desktop\WebP\bin\cwebp.exe

echo WebP dönüşümü başlıyor...

:: Ana klasördeki görseller
cd /d "C:\Users\90546\Desktop\cuval22\assets\images"
echo Ana klasör görselleri dönüştürülüyor...
"%WEBP_PATH%" -q 85 "about-main.jpg" -o "about-main.webp"
"%WEBP_PATH%" -q 85 "aboutUs.png" -o "aboutUs.webp"
"%WEBP_PATH%" -q 85 "profosyenelHizmet.png" -o "profosyenelHizmet.webp"
"%WEBP_PATH%" -q 85 "profosyenelHizmet1.jpg" -o "profosyenelHizmet1.webp"
"%WEBP_PATH%" -q 85 "img_quality_system.png" -o "img_quality_system.webp"

:: Facility klasörü
cd /d "C:\Users\90546\Desktop\cuval22\assets\images\facility"
echo Facility görselleri dönüştürülüyor...
"%WEBP_PATH%" -q 85 "factory.jpg" -o "factory.webp"
"%WEBP_PATH%" -q 85 "machine1.jpg" -o "machine1.webp"
"%WEBP_PATH%" -q 85 "machine2.jpg" -o "machine2.webp"
"%WEBP_PATH%" -q 85 "machine3.jpg" -o "machine3.webp"

:: Flags klasörü
cd /d "C:\Users\90546\Desktop\cuval22\assets\images\flags"
echo Flags görselleri dönüştürülüyor...
"%WEBP_PATH%" -q 95 "turkey Flag.png" -o "turkey Flag.webp"
"%WEBP_PATH%" -q 95 "United Kingdom.png" -o "United Kingdom.webp"

:: Logo klasörü
cd /d "C:\Users\90546\Desktop\cuval22\assets\images\logo"
echo Logo görselleri dönüştürülüyor...
"%WEBP_PATH%" -q 95 "1.png" -o "1.webp"
"%WEBP_PATH%" -q 95 "logo1.png" -o "logo1.webp"
"%WEBP_PATH%" -q 95 "logoold.png" -o "logoold.webp"

echo Dönüşüm tamamlandı!
echo Kontrol ediliyor...

:: PHP kontrol scriptini çalıştır
cd /d "C:\Users\90546\Desktop\cuval22"
php check-webp.php

pause