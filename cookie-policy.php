<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1 class="text-white text-center mb-3"><?php echo __('cookie_policy_title'); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?php echo __('cookie_policy_title'); ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cookie Policy Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-wrapper bg-white p-4 p-lg-5 rounded-3 shadow-sm">
                    <h2 class="mb-4"><?php echo __('cookie_policy_title'); ?></h2>
                    <p class="mb-4"><?php echo __('last_updated'); ?>: <?php echo date('d.m.Y'); ?></p>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">1. <?php echo __('what_are_cookies'); ?></h3>
                        <p><?php echo __('what_are_cookies_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">2. <?php echo __('how_we_use_cookies'); ?></h3>
                        <p><?php echo __('how_we_use_cookies_text'); ?></p>
                        <ul>
                            <li>
                                <h4 class="h6 mb-2"><?php echo __('essential_cookies'); ?></h4>
                                <p><?php echo __('essential_cookies_text'); ?></p>
                            </li>
                            <li>
                                <h4 class="h6 mb-2"><?php echo __('analytics_cookies'); ?></h4>
                                <p><?php echo __('analytics_cookies_text'); ?></p>
                            </li>
                            <li>
                                <h4 class="h6 mb-2"><?php echo __('marketing_cookies'); ?></h4>
                                <p><?php echo __('marketing_cookies_text'); ?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">3. <?php echo __('cookie_control'); ?></h3>
                        <p><?php echo __('cookie_control_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">4. <?php echo __('contact_section'); ?></h3>
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