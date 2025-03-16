<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="page-hero position-relative text-white overflow-hidden" style="min-height: 60vh;">
        <div class="hero-bg position-absolute w-100 h-100" style="background-image: url('assets/images/shipments/backgorund.jpg'); background-size: cover; background-position: center; filter: brightness(0.7); z-index: -1;"></div>
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="row justify-content-center w-100 py-5">
                <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-duration="800">
                    <h1 class="display-3 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><?php echo __('shipping'); ?></h1>
                    <p class="lead fs-4 mb-5" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);"><?php echo __('shipping_description'); ?></p>
                    <a href="#services" class="btn btn-lg btn-primary rounded-pill px-4 py-3 fw-semibold">
                        <?php echo __('explore_services'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="wave position-absolute bottom-0 w-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </section>

    <!-- Sevkiyat Hizmetleri -->
    <section id="services" class="shipping py-5">
        <div class="container py-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold mb-3"><?php echo __('our_shipping_services'); ?></h2>
                    <p class="lead text-muted"><?php echo __('shipping_services_subtitle'); ?></p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0029.webp" class="card-img-top" alt="Hızlı Sevkiyat" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-truck-fast fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('fast_shipping'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('fast_shipping_description'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0028.webp" class="card-img-top" alt="Güvenli Paketleme" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-box fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('safe_packaging'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('safe_packaging_description'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0025.webp" class="card-img-top" alt="Takip Sistemi" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-chart-line fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('tracking_system'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('tracking_system_description'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0024.webp" class="card-img-top" alt="Özel Ambalaj Çözümleri" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-gift fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('special_packaging_solutions'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('special_packaging_solutions_description'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0023.webp" class="card-img-top" alt="Modern Lojistik Çözümleri" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-cogs fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('modern_logistics_solutions'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('modern_logistics_solutions_description'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-hover">
                        <div class="position-relative">
                            <img src="assets/images/shipments/IMG-20250304-WA0022.webp" class="card-img-top" alt="Uygun Taşıma Yöntemleri" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 p-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-truck fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3"><?php echo __('affordable_transport_methods'); ?></h4>
                            <p class="card-text text-muted"><?php echo __('affordable_transport_methods_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Başarılar ve İstatistikler -->
    <section class="achievements py-5 bg-light position-relative">
        <div class="container py-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold mb-3"><?php echo __('achievements'); ?></h2>
                    <p class="lead text-muted"><?php echo __('achievements_subtitle'); ?></p>
                </div>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="achievement-box text-center p-5 bg-white rounded-4 shadow-sm h-100">
                        <div class="achievement-icon mb-4">
                            <span class="display-1 text-primary"><i class="fas fa-users"></i></span>
                        </div>
                        <h3 class="display-4 fw-bold mb-3">1000+</h3>
                        <p class="lead mb-0"><?php echo __('happy_customers'); ?></p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="achievement-box text-center p-5 bg-white rounded-4 shadow-sm h-100">
                        <div class="achievement-icon mb-4">
                            <span class="display-1 text-primary"><i class="fas fa-shipping-fast"></i></span>
                        </div>
                        <h3 class="display-4 fw-bold mb-3">500+</h3>
                        <p class="lead mb-0"><?php echo __('successful_shipments'); ?></p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="achievement-box text-center p-5 bg-white rounded-4 shadow-sm h-100">
                        <div class="achievement-icon mb-4">
                            <span class="display-1 text-primary"><i class="fas fa-award"></i></span>
                        </div>
                        <h3 class="display-4 fw-bold mb-3">20+</h3>
                        <p class="lead mb-0"><?php echo __('years_experience'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background Shape -->
        <div class="position-absolute top-0 end-0 d-none d-lg-block" style="z-index: 0; opacity: 0.05;">
            <svg width="500" height="500" viewBox="0 0 200 200">
                <path fill="currentColor" d="M45.3,-76.2C59.9,-69.2,73.5,-59.3,81.5,-45.6C89.6,-31.9,92.2,-14.3,89.8,2.4C87.4,19,79.9,34.8,69.8,48.1C59.7,61.4,47,72.3,32.5,77.8C18,83.3,1.8,83.5,-14.9,80.5C-31.5,77.5,-48.7,71.3,-60.9,59.7C-73.1,48.1,-80.4,31.1,-83.7,13.2C-87,-4.7,-86.3,-23.5,-79.3,-39.8C-72.3,-56.1,-59,-69.9,-44.1,-76.9C-29.2,-83.9,-12.8,-84.1,1.8,-87C16.5,-89.9,30.7,-83.2,45.3,-76.2Z" transform="translate(100 100)" />
            </svg>
        </div>
        
        <div class="position-absolute bottom-0 start-0 d-none d-lg-block" style="z-index: 0; opacity: 0.05;">
            <svg width="500" height="500" viewBox="0 0 200 200">
                <path fill="currentColor" d="M39.9,-65.7C52.8,-60.5,65.2,-51.8,72.7,-39.5C80.2,-27.2,82.9,-11.2,81.2,4.1C79.6,19.4,73.6,34,64.4,46.2C55.2,58.4,42.8,68.2,28.9,73.8C15,79.4,-0.4,80.8,-15.4,77.7C-30.4,74.6,-45,67,-56.3,55.6C-67.6,44.2,-75.6,29,-78.2,12.8C-80.8,-3.4,-78,-20.6,-70.2,-34.8C-62.4,-49,-49.6,-60.2,-35.8,-65.1C-21.9,-70,-11,-68.6,1.2,-70.7C13.4,-72.8,26.9,-70.9,39.9,-65.7Z" transform="translate(100 100)" />
            </svg>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="cta py-5 bg-primary text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-3"><?php echo __('ready_to_ship'); ?></h2>
                    <p class="lead mb-0"><?php echo __('contact_us_for_shipping'); ?></p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="iletisim.php" class="btn btn-lg btn-light rounded-pill px-4 py-3 fw-semibold">
                        <?php echo __('contact_us'); ?> <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .transition-hover {
        transition: all 0.3s ease;
    }
    
    .card.transition-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    
    .achievement-box {
        transition: all 0.3s ease;
    }
    
    .achievement-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
</style>

<?php include 'includes/footer.php'; ?> 