# Çuval ve Ambalaj E-Ticaret Projesi

Modern, responsive ve çok dilli bir çuval ve ambalaj e-ticaret web sitesi projesi.

## 🚀 Özellikler

### 📦 Ürün Yönetimi
- Detaylı ürün kataloğu ve filtreleme sistemi
- Ürün varyasyonları (boyut, renk, materyal)
- Stok takibi ve yönetimi
- Toplu ürün yönetimi

### 🌐 Kullanıcı Arayüzü
- Modern ve responsive tasarım
- Mobil öncelikli yaklaşım
- Çoklu dil desteği (TR/EN)
- Hızlı sayfa yükleme
- WhatsApp entegrasyonu

### 🚛 Sevkiyat ve Lojistik
- Sevkiyat takip sistemi
- Teslimat durumu güncellemeleri
- Lojistik raporlama
- Kargo entegrasyonu

### 🔒 Güvenlik
- KVKK uyumlu
- SSL/TLS şifreleme
- Güvenli form işleme
- Çerez politikası yönetimi

## 💻 Teknik Gereksinimler

### Sunucu Gereksinimleri
- PHP 7.4 veya üzeri
- MySQL 5.7 veya üzeri
- Apache 2.4 veya üzeri
  - mod_rewrite
  - mod_expires
  - mod_deflate

### Tarayıcı Desteği
- Chrome (son 2 versiyon)
- Firefox (son 2 versiyon)
- Safari (son 2 versiyon)
- Edge (son 2 versiyon)

## 🛠 Kurulum

1. Repoyu klonlayın:
   ```bash
   git clone https://github.com/kullanici/repo-adi.git
   ```

2. Gerekli dosyaları yapılandırın:
   ```bash
   cp config.php.example config.php
   ```

3. config.php dosyasını düzenleyin:
   - Veritabanı bağlantı bilgileri
   - Site URL ve adı
   - E-posta ayarları
   - WhatsApp numarası
   - API anahtarları

4. Dil dosyalarını kontrol edin:
   - lang/tr.php
   - lang/en.php

5. .htaccess dosyasını sunucunuza göre düzenleyin

## 📁 Proje Yapısı

```
root/
├── assets/                 # Statik dosyalar
│   ├── css/               # CSS dosyaları
│   ├── js/                # JavaScript dosyaları
│   ├── images/            # Görsel dosyaları
│   └── videos/            # Video dosyaları
├── includes/              # PHP include dosyaları
├── lang/                  # Dil dosyaları
├── scripts/              # Script dosyaları
└── [diğer dosyalar]
```

Detaylı dosya yapısı için `project-structure` dosyasına bakınız.

## 🔧 Geliştirme

### Stil Dosyaları
- `assets/css/style.css` - Ana stil dosyası
- Bootstrap 5.3.0 framework kullanılmaktadır
- CSS değişkenleri ile tema yönetimi

### JavaScript
- `assets/js/main.js` - Ana JavaScript dosyası
- ES6+ syntax
- Modüler yapı

### PHP
- PSR-4 standartları
- Nesne yönelimli yaklaşım
- MVC benzeri yapı

## 🌍 Çoklu Dil Desteği

Dil dosyaları `lang/` dizininde bulunur:
- `tr.php` - Türkçe çeviriler
- `en.php` - İngilizce çeviriler

Yeni dil eklemek için:
1. Yeni dil dosyası oluşturun
2. Dil değişkenlerini çevirin
3. Dil seçeneklerine ekleyin

## 📱 Mobil Uyumluluk

- Responsive tasarım
- Mobile-first yaklaşım
- Touch-friendly arayüz
- Optimize edilmiş görseller

## 🔐 Güvenlik Önlemleri

- Input validasyonu
- XSS koruması
- CSRF token kullanımı
- SQL injection koruması
- Güvenli dosya yükleme

## 🚀 Performans

- Görsel optimizasyonu
- Browser caching
- Gzip sıkıştırma
- CSS/JS minification
- Lazy loading

## 👥 Katkıda Bulunma

1. Fork edin
2. Feature branch oluşturun (`git checkout -b feature/YeniOzellik`)
3. Commit edin (`git commit -am 'Yeni özellik: X'`)
4. Push edin (`git push origin feature/YeniOzellik`)
5. Pull Request oluşturun

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için `LICENSE` dosyasına bakınız. 