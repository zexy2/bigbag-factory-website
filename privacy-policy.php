<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1 class="text-white text-center mb-3"><?php echo __('privacy_policy_title'); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?php echo __('privacy_policy_title'); ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Privacy Policy Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-wrapper bg-white p-4 p-lg-5 rounded-3 shadow-sm">
                    <h2 class="mb-4"><?php echo __('privacy_policy_title'); ?></h2>
                    <p class="mb-4"><?php echo __('last_updated'); ?>: <?php echo date('d.m.Y'); ?></p>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">1. <?php echo __('general_overview'); ?></h3>
                        <p><?php echo __('general_overview_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">2. <?php echo __('collected_information'); ?></h3>
                        <p><?php echo __('collected_information_text'); ?></p>
                        <ul>
                            <li><?php echo __('name_contact_info'); ?></li>
                            <li><?php echo __('email'); ?></li>
                            <li><?php echo __('phone'); ?></li>
                            <li><?php echo __('ip_address'); ?></li>
                            <li><?php echo __('cookies_usage_data'); ?></li>
                        </ul>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">3. <?php echo __('information_usage'); ?></h3>
                        <p><?php echo __('information_usage_text'); ?></p>
                        <ul>
                            <li><?php echo __('provide_services'); ?></li>
                            <li><?php echo __('customer_service'); ?></li>
                            <li><?php echo __('communicate'); ?></li>
                            <li><?php echo __('legal_obligations'); ?></li>
                        </ul>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">4. <?php echo __('information_security'); ?></h3>
                        <p><?php echo __('information_security_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">5. <?php echo __('cookies_section'); ?></h3>
                        <p><?php echo __('cookies_section_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">6. <?php echo __('third_party_services'); ?></h3>
                        <p><?php echo __('third_party_services_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">7. <?php echo __('your_rights'); ?></h3>
                        <p><?php echo __('your_rights_text'); ?></p>
                        <ul>
                            <li><?php echo __('access_rights'); ?></li>
                            <li><?php echo __('correction_rights'); ?></li>
                            <li><?php echo __('deletion_rights'); ?></li>
                            <li><?php echo __('objection_rights'); ?></li>
                        </ul>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">8. <?php echo __('contact_section'); ?></h3>
                        <p><?php echo __('contact_section_text'); ?></p>
                        <ul>
                            <li><?php echo __('email'); ?>: info@siteadi.com</li>
                            <li><?php echo __('phone'); ?>: +90 546 189 84 88</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 