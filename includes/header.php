<?php 
include_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Big Bag Çuval Fabrikası - PP Çuval, File Çuval, Big Bag ve endüstriyel çuval çeşitleri uygun fiyatlarla. Kaliteli ve dayanıklı çuval üretimi.">
    <meta name="keywords" content="big bag, pp çuval, file çuval, endüstriyel çuval, çuval fiyatları, toptan çuval, ikinci el big bag">
    <meta name="author" content="Big Bag Çuval Fabrikası">
    <meta name="og:title" content="Big Bag Çuval Fabrikası - Endüstriyel Çuval Çözümleri">
    <meta name="og:description" content="Kaliteli ve dayanıklı endüstriyel çuval çözümleri. PP Çuval, File Çuval ve Big Bag çeşitleri uygun fiyatlarla.">
    <meta name="og:image" content="https://bigbagcuvalfabrikasi.com/assets/images/logo/logo.png">
    <meta name="og:url" content="https://bigbagcuvalfabrikasi.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Big Bag Çuval Fabrikası">
    <meta name="twitter:description" content="Kaliteli ve dayanıklı endüstriyel çuval çözümleri.">
    <meta name="twitter:image" content="https://bigbagcuvalfabrikasi.com/assets/images/logo/logo.png">
    <link rel="canonical" href="https://bigbagcuvalfabrikasi.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <title><?php echo __('meta_title'); ?></title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css?v=1.1" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>
<body>
    <!-- Header Container -->
    <div class="header-container">
        <!-- Announcement Bar -->
        <div class="announcement-bar">
            <div class="container">
                <div class="announcement-content">
                    <!-- Sol Kısım: Logo ve Menü -->
                    <div class="header-left">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo/logo.png" alt="<?php echo __('company_name'); ?>" class="img-fluid">
                        </a>
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php"><?php echo __('home'); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'products.php') ? 'active' : ''; ?>" href="products.php"><?php echo __('products'); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'sevkiyatlar.php') ? 'active' : ''; ?>" href="sevkiyatlar.php"><?php echo $_SESSION['lang'] == 'en' ? __('shipping') : 'Sevkiyatlarımız'; ?></a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>" href="about.php"><?php echo __('about'); ?></a>
                                    
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="contact.php"><?php echo __('contact'); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Sağ Kısım: İletişim ve Dil -->
                    <div class="header-right">
                        <div class="contact-info">
                            <a href="tel:+905461898488" class="announcement-phone">
                                <i class="fas fa-phone me-2"></i>0546 189 84 88
                            </a>
                            <a href="https://wa.me/905461898488" class="btn btn-whatsapp ms-3" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp
                            </a>
                        </div>
                        
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=61571613387762" class="social-link" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dil seçimi announcement-bar içine taşındı -->
            <div class="language-selector">
                <a href="?lang=tr" class="<?php echo $_SESSION['lang'] == 'tr' ? 'active' : ''; ?>">
                    <img src="assets/images/icons/turkey Flag.ico" alt="TR" class="flag-icon">TR
                </a>
                <span class="mx-1">|</span>
                <a href="?lang=en" class="<?php echo $_SESSION['lang'] == 'en' ? 'active' : ''; ?>">
                    <img src="assets/images/icons/United Kingdom.ico" alt="EN" class="flag-icon">EN
                </a>
            </div>
        </div>
        <!-- Diğer header içeriği -->
    </div>

    <!--  WhatsApp Button -->
    <a href="https://wa.me/905461898488" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-text"><?php echo __('contact_us'); ?></span>
    </a>
</body>
</html> 