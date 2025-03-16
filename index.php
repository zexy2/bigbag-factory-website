<?php include 'includes/header.php'; ?>

<!-- Preload kritik görseller -->
<link rel="preload" as="image" href="assets/images/web-banner4-mobile.webp" media="(max-width: 768px)">
<link rel="preload" as="image" href="assets/images/web-banner4-tablet.webp" media="(min-width: 769px) and (max-width: 1024px)">
<link rel="preload" as="image" href="assets/images/web-banner4.webp" media="(min-width: 1025px)">

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide">
                        <div class="hero-content">
                            <div class="container">
                                <h1 data-aos="fade-up"><?php echo __('quality_bag_solutions'); ?></h1>
                                <p class="lead" data-aos="fade-up" data-aos-delay="100"><?php echo __('industrial_solutions'); ?></p>
                                <a href="#contact" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="200"><?php echo __('contact_us'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('assets/images/bags.jpg');">
                        <div class="hero-content">
                            <div class="container">
                                <div class="content-wrapper" data-aos="fade-up">
                                    <h1 class="mb-4"><?php echo __('wide_product_range'); ?></h1>
                                    <p class="lead mb-4"><?php echo __('bag_varieties'); ?></p>
                                    <div class="product-categories mb-4">
                                        <div class="category-item">
                                            <i class="fas fa-box"></i>
                                            <span>PP Çuvallar</span>
                                        </div>
                                        <div class="category-item">
                                            <i class="fas fa-cube"></i>
                                            <span>Big Bag</span>
                                        </div>
                                        <div class="category-item">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>File Çuvallar</span>
                                        </div>
                                        <div class="category-item">
                                            <i class="fas fa-recycle"></i>
                                            <span>Geri Dönüşüm</span>
                                        </div>
                                    </div>
                                    <a href="products.php" class="btn btn-primary btn-lg"><?php echo __('view_products'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('assets/images/profosyenelHizmet1.jpg');">
                        <div class="hero-content">
                            <div class="container">
                                <h1 data-aos="fade-up"><?php echo __('professional_service'); ?></h1>
                                <p class="lead" data-aos="fade-up" data-aos-delay="100"><?php echo __('expert_team'); ?></p>
                                <a href="about.php" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="200"><?php echo __('about'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2><?php echo __('product_categories'); ?></h2>
                <p><?php echo __('choose_suitable_bag'); ?></p>
            </div>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="card h-100">
                        <div class="card-badge"><?php echo __('best_seller'); ?> <i class="fas fa-star ms-1"></i></div>
                        <img src="assets/images/products/white-pp-bag.jpg" class="card-img-top" alt="PP Bags">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo __('pp_bags'); ?></h5>
                            <p class="card-text"><?php echo __('high_durability'); ?></p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> <?php echo __('uv_protection'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('moisture_resistance'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('lightweight'); ?></li>
                            </ul>
                            <p class="card-description"><?php echo __('pp_bag_description'); ?></p>
                            <a href="products.php#pp" class="btn btn-primary w-100"><?php echo __('view_details'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-badge"><?php echo __('industrial'); ?> <i class="fas fa-industry ms-1"></i></div>
                        <img src="assets/images/products/big-bag-1.jpg" class="card-img-top" alt="Big Bag">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo __('big_bags'); ?></h5>
                            <p class="card-text"><?php echo __('easy_transport'); ?></p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> <?php echo __('high_durability'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('moisture_resistance'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('easy_transport'); ?></li>
                            </ul>
                            <p class="card-description"><?php echo __('big_bag_90x90_description'); ?></p>
                            <a href="products.php#bigbag" class="btn btn-primary w-100"><?php echo __('view_details'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-badge"><?php echo __('eco_friendly'); ?> <i class="fas fa-leaf ms-1"></i></div>
                        <img src="assets/images/products/filecuvalmain.jpg" class="card-img-top" alt="File Bags">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo __('file_bags'); ?></h5>
                            <p class="card-text"><?php echo __('eco_friendly'); ?></p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> <?php echo __('ventilation'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('lightweight'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('moisture_resistance'); ?></li>
                            </ul>
                            <p class="card-description"><?php echo __('mesh_bag_description'); ?></p>
                            <a href="products.php#file" class="btn btn-primary w-100"><?php echo __('view_details'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100">
                        <div class="card-badge"><?php echo __('economic_product'); ?> <i class="fas fa-tags ms-1"></i></div>
                        <img src="assets/images/products/2.elcuval.jpg" class="card-img-top" alt="İkinci El BigBag Çuvallar">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo __('second_hand_bags'); ?></h5>
                            <p class="card-text"><?php echo __('second_hand_description'); ?></p>
                            <ul class="product-features">
                                <li><i class="fas fa-check"></i> <?php echo __('previously_used'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('print_defects'); ?></li>
                                <li><i class="fas fa-check"></i> <?php echo __('eco_friendly_option'); ?></li>
                            </ul>
                            <p class="card-description"><?php echo __('second_hand_long_desc'); ?></p>
                            <a href="products.php#second-hand" class="btn btn-primary w-100"><?php echo __('view_details'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-preview py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2><?php echo __('about_us'); ?></h2>
                <p class="lead"><?php echo __('company_experience'); ?></p>
            </div>
            <div class="row g-4">
                <!-- Sol Taraf - Şirket Bilgileri -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content p-4 bg-white rounded-3 shadow-sm h-100">
                        <p class="mb-4"><?php echo __('company_description'); ?></p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center">
                                    <div class="icon-box me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-medal fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('years_experience'); ?></h5>
                                        <p class="mb-0 text-muted small">2000 - 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center">
                                    <div class="icon-box me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-industry fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('quality_production'); ?></h5>
                                        <p class="mb-0 text-muted small">ISO 9001:2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center">
                                    <div class="icon-box me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('expert_team'); ?></h5>
                                        <p class="mb-0 text-muted small"><?php echo __('professional_service'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-item d-flex align-items-center">
                                    <div class="icon-box me-3 bg-primary bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-truck-fast fa-2x text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1"><?php echo __('fast_delivery'); ?></h5>
                                        <p class="mb-0 text-muted small"><?php echo __('fast_delivery_text'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="about.php" class="btn btn-primary"><?php echo __('learn_more'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- Sağ Taraf - İstatistikler -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="stat-card bg-white p-4 rounded-3 shadow-sm text-center hover-lift h-100">
                                <div class="icon-box mx-auto mb-3 bg-primary bg-opacity-10 p-3 rounded-circle d-inline-flex">
                                    <i class="fas fa-box-open fa-2x text-primary"></i>
                                </div>
                                <h3 class="counter display-6 fw-bold mb-2">1000+</h3>
                                <p class="mb-0 text-muted"><?php echo __('happy_customers'); ?></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card bg-white p-4 rounded-3 shadow-sm text-center hover-lift h-100">
                                <div class="icon-box mx-auto mb-3 bg-primary bg-opacity-10 p-3 rounded-circle d-inline-flex">
                                    <i class="fas fa-industry fa-2x text-primary"></i>
                                </div>
                                <h3 class="counter display-6 fw-bold mb-2">5000+</h3>
                                <p class="mb-0 text-muted"><?php echo __('countries'); ?></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card bg-white p-4 rounded-3 shadow-sm text-center hover-lift h-100">
                                <div class="icon-box mx-auto mb-3 bg-primary bg-opacity-10 p-3 rounded-circle d-inline-flex">
                                    <i class="fas fa-recycle fa-2x text-primary"></i>
                                </div>
                                <h3 class="counter display-6 fw-bold mb-2">100%</h3>
                                <p class="mb-0 text-muted"><?php echo __('recyclable'); ?></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card bg-white p-4 rounded-3 shadow-sm text-center hover-lift h-100">
                                <div class="icon-box mx-auto mb-3 bg-primary bg-opacity-10 p-3 rounded-circle d-inline-flex">
                                    <i class="fas fa-certificate fa-2x text-primary"></i>
                                </div>
                                <h3 class="counter display-6 fw-bold mb-2">100%</h3>
                                <p class="mb-0 text-muted"><?php echo __('quality_guarantee'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2><?php echo __('why_choose_us'); ?></h2>
                <p><?php echo __('working_for_you'); ?></p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="feature-box text-center">
                        <i class="fas fa-truck-fast fa-3x mb-3"></i>
                        <h4><?php echo __('fast_delivery'); ?></h4>
                        <p><?php echo __('working_for_you'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box text-center">
                        <i class="fas fa-medal fa-3x mb-3"></i>
                        <h4><?php echo __('quality_guarantee'); ?></h4>
                        <p><?php echo __('quality_guarantee'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box text-center">
                        <i class="fas fa-headset fa-3x mb-3"></i>
                        <h4><?php echo __('support'); ?></h4>
                        <p><?php echo __('support'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box text-center">
                        <i class="fas fa-hand-holding-dollar fa-3x mb-3"></i>
                        <h4><?php echo __('affordable_price'); ?></h4>
                        <p><?php echo __('affordable_price'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="contact-form py-5">
        <div class="container">
            <h2 class="text-center mb-4"><?php echo __('contact_us'); ?></h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="process-contact.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="<?php echo __('name_surname'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="<?php echo __('email'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="<?php echo __('phone'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="<?php echo __('message'); ?>" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg"><?php echo __('send'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>