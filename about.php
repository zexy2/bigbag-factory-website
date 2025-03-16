<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="page-hero bg-primary text-white">
        <div class="container">
            <div class="row align-items-center py-4">
                <div class="col-md-12 text-center" data-aos="fade-right">
                    <h1 class="display-4 fw-bold"><?php echo __('about_us'); ?></h1>
                    <p class="lead"><?php echo __('years_experience'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2><?php echo __('our_story'); ?></h2>
                    <p class="lead"><?php echo __('company_history'); ?></p>
                    <p><?php echo __('about_description_long'); ?></p>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="achievement">
                                <h3>20+</h3>
                                <p><?php echo __('years_experience'); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="achievement">
                                <h3>1000+</h3>
                                <p><?php echo __('happy_customers'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="assets/images/about-main.jpg" alt="About Us" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo __('our_mission'); ?></h3>
                            <p class="card-text"><?php echo __('mission_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo __('our_vision'); ?></h3>
                            <p class="card-text"><?php echo __('vision_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="values py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up"><?php echo __('our_values'); ?></h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="value-box text-center">
                        <i class="fas fa-award fa-3x mb-3"></i>
                        <h4><?php echo __('quality'); ?></h4>
                        <p><?php echo __('quality_text'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-box text-center">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <h4><?php echo __('reliability'); ?></h4>
                        <p><?php echo __('reliability_text'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-box text-center">
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                        <h4><?php echo __('innovation'); ?></h4>
                        <p><?php echo __('innovation_text'); ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-box text-center">
                        <i class="fas fa-leaf fa-3x mb-3"></i>
                        <h4><?php echo __('sustainability'); ?></h4>
                        <p><?php echo __('sustainability_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Info Section -->
    <section class="company-info py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4"><?php echo __('about_company'); ?></h2>
                    <p class="lead text-success mb-4" style="color: #2C5364 !important;"><?php echo __('company_experience'); ?></p>
                    <p><?php echo __('company_description'); ?></p>
                    <p><?php echo __('company_quality'); ?></p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image-wrapper">
                        <picture>
                            <source srcset="assets/images/facility/factory.webp" type="image/webp">
                            <img src="assets/images/facility/factory.jpg" 
                                 alt="Factory" 
                                 class="img-fluid about-image"
                                 loading="lazy">
                        </picture>
                        <div class="about-image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title" data-aos="fade-up"><?php echo __('why_choose_us'); ?></h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100"><?php echo __('working_for_you'); ?></p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="feature-box text-center">
                        <i class="fas fa-medal fa-3x mb-3"></i>
                        <h4><?php echo __('quality_production'); ?></h4>
                        <p><?php echo __('quality_production_text'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box text-center">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h4><?php echo __('expert_team'); ?></h4>
                        <p><?php echo __('expert_team_text'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box text-center">
                        <i class="fas fa-truck-fast fa-3x mb-3"></i>
                        <h4><?php echo __('fast_delivery'); ?></h4>
                        <p><?php echo __('fast_delivery_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Policy Section -->
    <section class="quality-policy py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <img src="assets/images/img_quality_system.png" alt="Quality System" class="img-fluid quality-system-img" style="max-width: 300px; margin: 0 auto; display: block; padding: 15px;">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="section-title mb-4"><?php echo __('quality_policy'); ?></h2>
                    <div class="quality-items">
                        <div class="quality-item mb-4">
                            <h4><i class="fas fa-chart-line text-primary me-2"></i><?php echo __('increase_efficiency'); ?></h4>
                            <p><?php echo __('efficiency_text'); ?></p>
                        </div>
                        <div class="quality-item mb-4">
                            <h4><i class="fas fa-users text-warning me-2"></i><?php echo __('client_satisfaction'); ?></h4>
                            <p><?php echo __('client_satisfaction_text'); ?></p>
                        </div>
                        <div class="quality-item mb-4">
                            <h4><i class="fas fa-cogs text-info me-2"></i><?php echo __('quality_system'); ?></h4>
                            <p><?php echo __('quality_system_text'); ?></p>
                        </div>
                        <div class="quality-item">
                            <h4><i class="fas fa-lightbulb text-success me-2"></i><?php echo __('innovative_solutions'); ?></h4>
                            <p><?php echo __('innovative_solutions_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Production Facility Section -->
    <section class="production-facility py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title" data-aos="fade-up"><?php echo __('production_facility'); ?></h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100"><?php echo __('modern_facility'); ?></p>
                </div>
            </div>

            <!-- Facility Cards -->
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="facility-card">
                        <div class="image-wrapper">
                            <img src="assets/images/facility/machine2.jpg" alt="LOHIA Nova 61 Production Line" class="img-fluid">
                            <div class="overlay">
                                <span class="badge bg-primary">LOHIA Nova 61</span>
                            </div>
                        </div>
                        <div class="content">
                            <h4><?php echo __('production_line_1'); ?></h4>
                            <p><?php echo __('production_line_1_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="facility-card">
                        <div class="image-wrapper">
                            <img src="assets/images/facility/machine1.jpg" alt="LOHIA Nova 8 Production Line" class="img-fluid">
                            <div class="overlay">
                                <span class="badge bg-primary">LOHIA Nova 8</span>
                            </div>
                        </div>
                        <div class="content">
                            <h4><?php echo __('production_line_2'); ?></h4>
                            <p><?php echo __('production_line_2_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="facility-card">
                        <div class="image-wrapper">
                            <video class="facility-video" controls poster="assets/images/facility/machine3.jpg">
                                <source src="assets/videos/facility-tour.mp4" type="video/mp4">
                                <?php echo __('video_not_supported'); ?>
                            </video>
                        </div>
                        <div class="content">
                            <h4><?php echo __('production_facility'); ?></h4>
                            <p><?php echo __('production_facility_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?> 