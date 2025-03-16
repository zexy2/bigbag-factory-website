<?php include 'includes/header.php'; ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1 class="text-white text-center mb-3"><?php echo __('terms_title'); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php" class="text-white"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item active text-white" aria-current="page"><?php echo __('terms_title'); ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Terms Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-wrapper bg-white p-4 p-lg-5 rounded-3 shadow-sm">
                    <h2 class="mb-4"><?php echo __('terms_title'); ?></h2>
                    <p class="mb-4"><?php echo __('last_updated'); ?>: <?php echo date('d.m.Y'); ?></p>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">1. <?php echo __('terms_general'); ?></h3>
                        <p><?php echo __('terms_general_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">2. <?php echo __('terms_use'); ?></h3>
                        <p><?php echo __('terms_use_text'); ?></p>
                        <ul>
                            <li><?php echo __('terms_use_1'); ?></li>
                            <li><?php echo __('terms_use_2'); ?></li>
                            <li><?php echo __('terms_use_3'); ?></li>
                            <li><?php echo __('terms_use_4'); ?></li>
                        </ul>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">3. <?php echo __('terms_intellectual'); ?></h3>
                        <p><?php echo __('terms_intellectual_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">4. <?php echo __('terms_liability'); ?></h3>
                        <p><?php echo __('terms_liability_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">5. <?php echo __('terms_changes'); ?></h3>
                        <p><?php echo __('terms_changes_text'); ?></p>
                    </div>

                    <div class="policy-section mb-4">
                        <h3 class="h5 mb-3">6. <?php echo __('contact_section'); ?></h3>
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