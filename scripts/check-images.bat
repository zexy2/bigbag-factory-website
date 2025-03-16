@echo off
echo Eksik WebP dosyaları kontrol ediliyor...
echo.

cd C:\Users\90546\Desktop\cuval22\assets\images

for /R %%f in (*.jpg *.png) do (
    set "webp=%%~dpnf.webp"
    if not exist "%%~dpnf.webp" (
        echo Eksik: %%~nxf
    )
)

echo.
echo Kontrol tamamlandı.
pause