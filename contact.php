<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="page-hero bg-primary text-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h1 class="display-4 fw-bold"><?php echo __('contact_us'); ?></h1>
                    <p class="lead"><?php echo __('get_in_touch'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="contact-info p-4 bg-light rounded">
                        <h3 class="mb-4"><?php echo __('contact_info'); ?></h3>
                        
                        <ul class="list-unstyled mb-0">
                            <!-- Address -->
                            <li class="mb-4">
                                <div class="d-flex">
                                    <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1"><?php echo __('address'); ?></h5>
                                        <p class="mb-0"><?php echo __('company_address'); ?></p>
                                    </div>
                                </div>
                            </li>

                            <!-- Phone -->
                            <li class="mb-4">
                                <div class="d-flex">
                                    <i class="fas fa-phone me-3 mt-1"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1"><?php echo __('phone_number'); ?></h5>
                                        <p class="mb-0">+90 546 189 84 88</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Email -->
                            <li class="mb-4">
                                <div class="d-flex">
                                    <i class="fas fa-envelope me-3 mt-1"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1"><?php echo __('email_address'); ?></h5>
                                        <p class="mb-0">info@siteadi.com</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Working Hours -->
                            <li>
                                <div class="d-flex">
                                    <i class="fas fa-clock me-3 mt-1"></i>
                                    <div>
                                        <h5 class="fw-bold mb-1"><?php echo __('working_hours'); ?></h5>
                                        <p class="mb-0">
                                            <?php echo __('monday_friday'); ?><br>
                                            <?php echo __('saturday'); ?><br>
                                            <?php echo __('sunday'); ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-form p-4 bg-light rounded">
                        <h3 class="mb-4"><?php echo __('send_message'); ?></h3>
                        <form action="process-contact.php" method="POST" id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label"><?php echo __('name_surname'); ?></label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label"><?php echo __('email'); ?></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label"><?php echo __('phone'); ?></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label"><?php echo __('subject'); ?></label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label"><?php echo __('message'); ?></label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100"><?php echo __('send'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section mt-5">
        <div class="container-fluid p-0">
            <div class="map-container" data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAPS_EMBED_URL" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?> 