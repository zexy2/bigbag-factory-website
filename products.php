<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="page-hero bg-primary text-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h1 class="display-3 fw-bold mb-4"><?php echo __('product_categories'); ?></h1>
                    <p class="lead fs-4 mb-0"><?php echo __('choose_suitable_bag'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filters py-4 bg-light border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Ürün Kategorileri -->
                    <div class="filters mb-4">
                        <h5 class="mb-3"><?php echo __('product_categories'); ?></h5>
                        <div class="filter-buttons d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary" data-filter="all"><i class="fas fa-box"></i> <?php echo __('all'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="pp"><i class="fas fa-box"></i> <?php echo __('pp_bags'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="bigbag"><i class="fas fa-box-open"></i> <?php echo __('big_bags'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="file"><i class="fas fa-shopping-bag"></i> <?php echo __('mesh_bags'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="lamine"><i class="fas fa-layer-group"></i> <?php echo __('laminated_bags'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="haral"><i class="fas fa-sack"></i> <?php echo __('haral_bag'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="insaat"><i class="fas fa-hard-hat"></i> <?php echo __('construction_bags'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="cam"><i class="fas fa-glass"></i> <?php echo __('cam_cuval'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="jut"><i class="fas fa-leaf"></i> <?php echo __('jut_bag'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="second-hand"><i class="fas fa-recycle"></i> <?php echo __('second_hand_bigbag'); ?></button>
                            <button class="btn btn-outline-primary" data-filter="defective"><i class="fas fa-tag"></i> <?php echo __('defective_print_bags'); ?></button>
                        </div>
                    </div>

                    <!-- Boyut Filtresi -->
                    <h5 class="mb-3">Boyut</h5>
                    <div class="size-filters d-flex flex-wrap gap-2 mb-4">
                        <button class="btn btn-sm btn-outline-secondary" data-size="30x50">30×50</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="35x50">35×50</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="40x60">40×60</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="45x75">45×75</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="50x80">50×80</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="55x85">55×85</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="60x90">60×90</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="65x105">65×105</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="75x115">75×115</button>
                        <button class="btn btn-sm btn-outline-secondary" data-size="90x90">90×90×115</button>
                    </div>

                    <!-- Özellikler Filtresi -->
                    <h5 class="mb-3"><?php echo __('features'); ?></h5>
                    <div class="feature-filters d-flex flex-wrap gap-2 mb-4">
                        <button class="btn btn-sm btn-outline-secondary" data-feature="uv"><i class="fas fa-sun"></i> <?php echo __('uv_protection'); ?></button>
                        <button class="btn btn-sm btn-outline-secondary" data-feature="waterproof"><i class="fas fa-tint-slash"></i> <?php echo __('moisture_resistance'); ?></button>
                        <button class="btn btn-sm btn-outline-secondary" data-feature="ventilation"><i class="fas fa-wind"></i> <?php echo __('ventilation'); ?></button>
                        <button class="btn btn-sm btn-outline-secondary" data-feature="heavy-duty"><i class="fas fa-weight-hanging"></i> <?php echo __('heavy_duty'); ?></button>
                        <button class="btn btn-sm btn-outline-secondary" data-feature="second-hand"><i class="fas fa-recycle"></i> <?php echo __('second_hand'); ?></button>
                        <button class="btn btn-sm btn-outline-secondary" data-feature="defective"><i class="fas fa-exclamation-triangle"></i> <?php echo __('defective'); ?></button>
                    </div>

                    <!-- Filtreleri Temizle -->
                    <div class="clear-filters mb-3">
                        <button class="btn btn-outline-danger btn-sm" id="clearFilters">
                            <i class="fas fa-times"></i> Filtreleri Temizle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products py-5">
        <div class="container">
            <!-- Mobil için kaydırma ipucu -->
            <div class="scroll-hint d-md-none">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="row g-4">
                <!-- PP Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="30x50">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/white-pp-bag.webp" type="image/webp">
                                <img src="assets/images/products/white-pp-bag.jpg" 
                                     alt="30x50 PP Bag" 
                                     class="img-fluid"
                                     loading="eager"
                                     decoding="sync"
                                     width="450"
                                     height="450">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp3050Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>30x50 PP Çuval</h3>
                            <p>Genel Amaçlı Kullanım</p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 35x50 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="35x50" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/white-pp-bag.webp" type="image/webp">
                                <img src="assets/images/products/white-pp-bag.jpg" 
                                     alt="35x50 PP Bag" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp3550Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_35x50'); ?></h3>
                            <p class="mb-0"><?php echo __('durable_lightweight'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Cross Corner Big Bag -->
                <div class="col-lg-4 col-md-6 product-item" data-category="bigbag" data-size="90x90" data-features="heavy-duty,ventilation" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/big-bag-1.webp" type="image/webp">
                                <img src="assets/images/products/big-bag-1.jpg" 
                                     alt="Cross Corner Big Bag Çuval" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#crosscornerModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3>Cross Corner Big Bag Çuval</h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- File Çuvallar -->
                <div class="col-lg-4 col-md-6 product-item" data-category="file" data-size="50x80">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/filecuvalmain.webp" type="image/webp">
                                <img src="assets/images/products/filecuvalmain.jpg" 
                                     alt="File Çuvallar" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#fileModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>File Çuval 50x80</h3>
                            <p>Havalandırmalı Özel Üretim</p>
                        </div>
                    </div>
                </div>

                <!-- Construction Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="insaat" data-size="50x80" data-features="uv,heavy-duty" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/inşaatcuvalı1.webp" type="image/webp">
                                <img src="assets/images/products/inşaatcuvalı1.jpg" 
                                     alt="Construction Bag" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#molozModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('construction_bag_50x80'); ?></h3>
                            <p class="mb-0"><?php echo __('special_construction'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Laminated Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="lamine" data-size="50x70">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/lamineÇuval1.webp" type="image/webp">
                                <img src="assets/images/products/lamineÇuval1.jpg" 
                                     alt="Lamine Çuval" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#lamineModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Lamine Çuval 50x70</h3>
                            <p>Su Geçirmez Özel Kaplama</p>
                        </div>
                    </div>
                </div>

                <!-- Standart PP Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="50x70">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/white-pp-bag.webp" type="image/webp">
                                <img src="assets/images/products/white-pp-bag.jpg" 
                                     alt="50x70 PP Bag" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp5070Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>50x70 PP Çuval</h3>
                            <p>Genel Amaçlı Kullanım</p>
                        </div>
                    </div>
                </div>

                <!-- Cam Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="cam">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/camÇuval2.webp" type="image/webp">
                                <img src="assets/images/products/camÇuval2.jpg" 
                                     alt="50x80 Cam Çuvalı" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#camModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>Cam Çuvalı 50x80</h3>
                            <p>Özel Cam Taşıma Çuvalı</p>
                        </div>
                    </div>
                </div>

                <!-- Cam Bags 55x90 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="cam" data-size="55x90" data-features="heavy-duty" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/camÇuval2.jpg" alt="55x90 Cam Çuvalı" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#cam5590Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('cam_bag_55x90'); ?></h3>
                            <p class="mb-0"><?php echo __('special_cam_bag'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Ventilli Big Bag -->
                <div class="col-lg-4 col-md-6 product-item" data-category="bigbag" data-size="90x90" data-features="ventilation,heavy-duty" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/ventilli.jpg" alt="<?php echo __('ventilli_bigbag'); ?>" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ventilliModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('ventilli_bigbag'); ?></h3>
                            <p class="mb-0"><?php echo __('ventilation'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Haral Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="haral">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/haralÇuval1.webp" type="image/webp">
                                <img src="assets/images/products/haralÇuval1.jpg" 
                                     alt="Haral Çuval" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#haralModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('haral_bag'); ?></h3>
                            <p class="mb-0"><?php echo __('traditional_haral'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Jut Bags -->
                <div class="col-lg-4 col-md-6 product-item" data-category="jut" data-size="60x90" data-features="eco-friendly,ventilation" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/jut-cuval.webp" type="image/webp">
                                <img src="assets/images/products/jut-cuval.jpg" 
                                     alt="Jüt Çuval" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#jutModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('jute_bags'); ?></h3>
                            <p class="mb-0"><?php echo __('natural_jute'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- İkinci El BigBag -->
                <div class="col-lg-4 col-md-6 product-item" data-category="second-hand" data-size="90x90" data-features="second-hand,heavy-duty" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <picture>
                                <source srcset="assets/images/products/2.elcuval.webp" type="image/webp">
                                <img src="assets/images/products/2.elcuval.jpg" 
                                     alt="İkinci El Big Bag" 
                                     class="img-fluid"
                                     loading="lazy">
                            </picture>
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#secondHandModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('second_hand_bags'); ?></h3>
                            <p class="mb-0"><?php echo __('second_hand_description'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Baskı Hatalı Çuvallar -->
                <div class="col-lg-4 col-md-6 product-item" data-category="defective" data-features="defective" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/baskıHatalı.jpg" alt="Baskı Hatalı Çuval" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#defectiveModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('defective_print_bags'); ?></h3>
                            <p class="mb-0"><?php echo __('defective_description'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Q Big Bag -->
                <div class="col-lg-4 col-md-6 product-item" data-category="bigbag" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/big-bag-1.jpg" alt="<?php echo __('q_bigbag'); ?>" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#qbigbagModal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('q_bigbag'); ?></h3>
                            <p class="mb-0"><?php echo __('easy_transport'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 40x60 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="40x60" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="40x60 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp4060Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_40x60'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 45x75 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="45x75" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="45x75 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp4575Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_45x75'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 55x85 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="55x85" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="55x85 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp5585Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_55x85'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 55x95 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="55x95" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="55x95 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp5595Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_55x95'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 60x90 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="60x90" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="60x90 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp6090Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_60x90'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 65x105 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="65x105" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="65x105 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp65105Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_65x105'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- PP Bags 75x115 -->
                <div class="col-lg-4 col-md-6 product-item" data-category="pp" data-size="75x115" data-features="uv,waterproof" data-aos="fade-up">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/images/products/white-pp-bag.jpg" alt="75x115 PP Bag" class="img-fluid">
                            <div class="product-overlay">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#pp75115Modal">
                                    <i class="fas fa-eye"></i> <?php echo __('view_details'); ?>
                                </button>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><?php echo __('pp_bag_75x115'); ?></h3>
                            <p class="mb-0"><?php echo __('high_durability'); ?>, <?php echo __('uv_protection'); ?></p>
                        </div>
                    </div>
                </div>


    </section>

    <!-- Product Modals -->
    <!-- PP 30x50 Modal -->
    <div class="modal fade" id="pp3050Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_30x50'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 35x50 Modal -->
    <div class="modal fade" id="pp3550Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider35x50" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/white-pp-bag.webp" type="image/webp">
                                                <img src="assets/images/products/white-pp-bag.jpg" 
                                                     alt="PP Bag Image 1" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/white-pp-bag-2.webp" type="image/webp">
                                                <img src="assets/images/products/white-pp-bag-2.jpg" 
                                                     alt="PP Bag Image 2" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider35x50" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider35x50" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider35x50" data-bs-slide-to="0">
                                        <picture>
                                            <source srcset="assets/images/products/white-pp-bag.webp" type="image/webp">
                                            <img src="assets/images/products/white-pp-bag.jpg" 
                                                 alt="PP Bag Preview 1" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider35x50" data-bs-slide-to="1">
                                        <picture>
                                            <source srcset="assets/images/products/white-pp-bag-2.webp" type="image/webp">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" 
                                                 alt="PP Bag Preview 2" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_35x50'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('durable_lightweight'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('easy_transport'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('custom_size'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_35x50_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cross Corner Big Bag Modal -->
    <div class="modal fade" id="crosscornerModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="bigBagSlider" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/big-bag-1.webp" type="image/webp">
                                                <img src="assets/images/products/big-bag-1.jpg" 
                                                     alt="Big Bag Image 1" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/big-bag-2.webp" type="image/webp">
                                                <img src="assets/images/products/big-bag-2.jpg" 
                                                     alt="Big Bag Image 2" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <!-- Thumbnails -->
                                    <div class="thumbnail-images d-flex mt-3">
                                        <div class="thumbnail me-2 active" data-bs-target="#bigBagSlider" data-bs-slide-to="0">
                                            <picture>
                                                <source srcset="assets/images/products/big-bag-1.webp" type="image/webp">
                                                <img src="assets/images/products/big-bag-1.jpg" 
                                                     alt="Big Bag Preview 1" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                        <div class="thumbnail me-2" data-bs-target="#bigBagSlider" data-bs-slide-to="1">
                                            <picture>
                                                <source srcset="assets/images/products/big-bag-2.webp" type="image/webp">
                                                <img src="assets/images/products/big-bag-2.jpg" 
                                                     alt="Big Bag Preview 2" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Cross Corner Big Bag Çuval</h2>
                            <div class="features mt-4">
                                <h4>Özellikler:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Yüksek Dayanıklılık</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Ağır Hizmet Tipi</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Havalandırmalı</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>UV Korumalı</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Özel Köşe Tasarımı</li>
                                </ul>
                            </div>
                            <div class="description mt-4">
                                <h4>Açıklama:</h4>
                                <p>Cross Corner Big Bag çuvallarımız, yüksek dayanıklılık ve özel köşe tasarımı ile 
                                endüstriyel kullanım için ideal bir seçenektir. UV korumalı yapısı sayesinde dış 
                                mekanlarda uzun süre kullanılabilir. Havalandırma özelliği ile ürünlerinizin 
                                tazeliğini korur. Ağır hizmet tipi olarak tasarlanmış olup, yüksek ağırlıklara 
                                dayanıklıdır. Özel köşe tasarımı sayesinde istifleme ve depolama kolaylığı sağlar.</p>
                            </div>
                            <div class="mt-4">
                                <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>Fiyat ve Sipariş
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- File Çuvallar Modal -->
    <div class="modal fade" id="fileModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="fileCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/filecuvalmain.webp" type="image/webp">
                                                <img src="assets/images/products/filecuvalmain.jpg" alt="File Çuval" class="img-fluid rounded" loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/file-cuvall1.webp" type="image/webp">
                                                <img src="assets/images/products/filecuvall1.jpg" alt="File Çuval 1" class="img-fluid rounded" loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/file-cuval1.webp" type="image/webp">
                                                <img src="assets/images/products/filecuval1.jpg" alt="File Çuval 1" class="img-fluid rounded" loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <!-- Thumbnails -->
                                    <div class="thumbnail-images d-flex mt-3">
                                        <div class="thumbnail me-2 active" data-bs-target="#fileCarousel" data-bs-slide-to="0">
                                            <picture>
                                                <source srcset="assets/images/products/filecuvalmain.webp" type="image/webp">
                                                <img src="assets/images/products/filecuvalmain.jpg" alt="File Çuval Preview" class="img-fluid rounded">
                                            </picture>
                                        </div>
                                        <div class="thumbnail me-2" data-bs-target="#fileCarousel" data-bs-slide-to="1">
                                            <picture>
                                                <source srcset="assets/images/products/file-cuvall1.webp" type="image/webp">
                                                <img src="assets/images/products/file-cuvall1.jpg" alt="File Çuval 1 Preview" class="img-fluid rounded">
                                            </picture>
                                        </div>
                                        <div class="thumbnail me-2" data-bs-target="#fileCarousel" data-bs-slide-to="2">
                                            <picture>
                                                <source srcset="assets/images/products/file-cuval1.webp" type="image/webp">
                                                <img src="assets/images/products/filecuval1.jpg" alt="File Çuval 1 Preview" class="img-fluid rounded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3">File Çuval</h2>
                            <div class="features mb-4">
                                <h4>Özellikler:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i>Havalandırmalı Özel Üretim</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Dayanıklı Yapı</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Özel File Dokuma</li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4>Açıklama:</h4>
                                <p><?php echo __('file_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>Fiyat ve Sipariş
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Moloz Çuvalı Modal -->
    <div class="modal fade" id="molozModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="molozCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/inşaatcuvalı1.webp" type="image/webp">
                                                <img src="assets/images/products/inşaatcuvalı1.jpg" 
                                                     alt="Moloz Çuvalı" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/inşaatcuvalı2.webp" type="image/webp">
                                                <img src="assets/images/products/inşaatcuvalı2.jpg" 
                                                     alt="Moloz Çuvalı Detay" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <!-- Thumbnails -->
                                    <div class="thumbnail-images d-flex mt-3">
                                        <div class="thumbnail me-2 active" data-bs-target="#molozCarousel" data-bs-slide-to="0">
                                            <picture>
                                                <source srcset="assets/images/products/inşaatcuvalı1.webp" type="image/webp">
                                                <img src="assets/images/products/inşaatcuvalı1.jpg" 
                                                     alt="Moloz Çuvalı Preview" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                        <div class="thumbnail me-2" data-bs-target="#molozCarousel" data-bs-slide-to="1">
                                            <picture>
                                                <source srcset="assets/images/products/inşaatcuvalı2.webp" type="image/webp">
                                                <img src="assets/images/products/inşaatcuvalı2.jpg" 
                                                     alt="Moloz Çuvalı Detay Preview" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('construction_bag_50x80'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('easy_transport'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('construction_bag_50x80_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lamine Modal -->
    <div class="modal fade" id="lamineModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="lamineCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/lamineÇuval1.webp" type="image/webp">
                                                <img src="assets/images/products/lamineÇuval1.jpg" 
                                                     alt="Lamine Çuval" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/lamineÇuval.webp" type="image/webp">
                                                <img src="assets/images/products/lamineÇuval.jpg" 
                                                     alt="Lamine Çuval Detay" 
                                                     class="img-fluid rounded"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <!-- Thumbnails -->
                                    <div class="thumbnail-images d-flex mt-3">
                                        <div class="thumbnail me-2 active" data-bs-target="#lamineCarousel" data-bs-slide-to="0">
                                            <picture>
                                                <source srcset="assets/images/products/lamineÇuval1.webp" type="image/webp">
                                                <img src="assets/images/products/lamineÇuval1.jpg" 
                                                     alt="Lamine Çuval Preview" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                        <div class="thumbnail me-2" data-bs-target="#lamineCarousel" data-bs-slide-to="1">
                                            <picture>
                                                <source srcset="assets/images/products/lamineÇuval.webp" type="image/webp">
                                                <img src="assets/images/products/lamineÇuval.jpg" 
                                                     alt="Lamine Çuval Detay Preview" 
                                                     class="img-fluid rounded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('laminated_bag_50x70'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('waterproof'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('laminated_bag_50x70_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 50x70 Modal -->
    <div class="modal fade" id="pp5070Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider50x70" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider50x70" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider50x70" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider50x70" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider50x70" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider50x70" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_50x70'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_50x70_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cam Çuvalı Modal -->
    <div class="modal fade" id="camModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="camCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/camÇuval2.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/camÇuval.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/camÇuval3.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#camCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#camCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images mt-3 d-flex">
                                    <div class="thumbnail me-2 active" data-bs-target="#camCarousel" data-bs-slide-to="0">
                                        <img src="assets/images/products/camÇuval2.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#camCarousel" data-bs-slide-to="1">
                                        <img src="assets/images/products/camÇuval.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#camCarousel" data-bs-slide-to="2">
                                        <img src="assets/images/products/camÇuval3.jpg" alt="Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('cam_bag_50x80'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('special_glass_transport'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('glass_bag_50x80_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cam Bags 55x90 -->
    <div class="modal fade" id="cam5590Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="cam5590Carousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/camÇuval2.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/camÇuval.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/camÇuval3.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#cam5590Carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#cam5590Carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#cam5590Carousel" data-bs-slide-to="0">
                                        <img src="assets/images/products/camÇuval2.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#cam5590Carousel" data-bs-slide-to="1">
                                        <img src="assets/images/products/camÇuval.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#cam5590Carousel" data-bs-slide-to="2">
                                        <img src="assets/images/products/camÇuval3.jpg" alt="55x90 Cam Çuvalı" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('cam_bag_55x90'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('special_glass_transport'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('glass_bag_55x90_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ventilli Big Bag Modal -->
    <div class="modal fade" id="ventilliModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title"><?php echo __('ventilli_bigbag'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="ventilliCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/ventilli.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/venti_bigbag.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/ventelli-bigbag.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#ventilliCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#ventilliCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#ventilliCarousel" data-bs-slide-to="0">
                                        <img src="assets/images/products/ventilli.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#ventilliCarousel" data-bs-slide-to="1">
                                        <img src="assets/images/products/venti_bigbag.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#ventilliCarousel" data-bs-slide-to="2">
                                        <img src="assets/images/products/ventelli-bigbag.jpg" alt="Ventilli Big Bag" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <?php foreach (__('ventilli_features') as $feature): ?>
                                        <li><i class="fas fa-check text-primary me-2"></i><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('ventilli_bigbag_desc'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Haral Çuvalı Modal -->
    <div class="modal fade" id="haralModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title"><?php echo __('haral_bag'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="haralCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/haralÇuval1.webp" type="image/webp">
                                                <img src="assets/images/products/haralÇuval1.jpg" 
                                                     alt="Haral Çuval" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/haralÇuval.webp" type="image/webp">
                                                <img src="assets/images/products/haralÇuval.jpg" 
                                                     alt="Haral Çuval" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/haralÇuval2.webp" type="image/webp">
                                                <img src="assets/images/products/haralÇuval2.jpg" 
                                                     alt="Haral Çuval" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#haralCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#haralCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#haralCarousel" data-bs-slide-to="0">
                                        <picture>
                                            <source srcset="assets/images/products/haralÇuval1.webp" type="image/webp">
                                            <img src="assets/images/products/haralÇuval1.jpg" 
                                                 alt="Haral Çuval" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#haralCarousel" data-bs-slide-to="1">
                                        <picture>
                                            <source srcset="assets/images/products/haralÇuval.webp" type="image/webp">
                                            <img src="assets/images/products/haralÇuval.jpg" 
                                                 alt="Haral Çuval" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#haralCarousel" data-bs-slide-to="2">
                                        <picture>
                                            <source srcset="assets/images/products/haralÇuval2.webp" type="image/webp">
                                            <img src="assets/images/products/haralÇuval2.jpg" 
                                                 alt="Haral Çuval" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('haral_bag'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('traditional_haral'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('haral_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jüt Çuvalı Modal -->
    <div class="modal fade" id="jutModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Product Gallery -->
                            <div class="product-gallery">
                                <div id="jutCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/jut-cuval.webp" type="image/webp">
                                                <img src="assets/images/products/jut-cuval.jpg" 
                                                     alt="Jute Bag" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/jut-cuval-1.webp" type="image/webp">
                                                <img src="assets/images/products/jut-cuval-1.jpg" 
                                                     alt="Jute Bag Detail" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#jutCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#jutCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#jutCarousel" data-bs-slide-to="0">
                                        <picture>
                                            <source srcset="assets/images/products/jut-cuval.webp" type="image/webp">
                                            <img src="assets/images/products/jut-cuval.jpg" 
                                                 alt="Jute Bag Thumbnail 1" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#jutCarousel" data-bs-slide-to="1">
                                        <picture>
                                            <source srcset="assets/images/products/jut-cuval-1.webp" type="image/webp">
                                            <img src="assets/images/products/jut-cuval-1.jpg" 
                                                 alt="Jute Bag Thumbnail 2" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('jut_bag'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('natural_jut'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('jute_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- İkinci El BigBag Modal -->
    <div class="modal fade" id="secondHandModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="secondHandCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <picture>
                                                <source srcset="assets/images/products/2.elcuval1.webp" type="image/webp">
                                                <img src="assets/images/products/2.elcuval1.jpg" 
                                                     alt="İkinci El BigBag" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/2.elcuval.webp" type="image/webp">
                                                <img src="assets/images/products/2.elcuval.jpg" 
                                                     alt="İkinci El BigBag" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="carousel-item">
                                            <picture>
                                                <source srcset="assets/images/products/ikincielcuval.webp" type="image/webp">
                                                <img src="assets/images/products/ikincielcuval.jpg" 
                                                     alt="İkinci El BigBag" 
                                                     class="img-fluid"
                                                     loading="lazy">
                                            </picture>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#secondHandCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#secondHandCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#secondHandCarousel" data-bs-slide-to="0">
                                        <picture>
                                            <source srcset="assets/images/products/2.elcuval1.webp" type="image/webp">
                                            <img src="assets/images/products/2.elcuval1.jpg" 
                                                 alt="İkinci El BigBag Thumbnail 1" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#secondHandCarousel" data-bs-slide-to="1">
                                        <picture>
                                            <source srcset="assets/images/products/2.elcuval.webp" type="image/webp">
                                            <img src="assets/images/products/2.elcuval.jpg" 
                                                 alt="İkinci El BigBag Thumbnail 2" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#secondHandCarousel" data-bs-slide-to="2">
                                        <picture>
                                            <source srcset="assets/images/products/ikincielcuval.webp" type="image/webp">
                                            <img src="assets/images/products/ikincielcuval.jpg" 
                                                 alt="İkinci El BigBag Thumbnail 3" 
                                                 class="img-fluid rounded">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2><?php echo __('second_hand_bags'); ?></h2>
                            <div class="features mt-4">
                                <h4><?php echo __('features'); ?></h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('previously_used'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('print_defects'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('eco_friendly_option'); ?></li>
                                </ul>
                            </div>
                            <div class="description mt-4">
                                <h4><?php echo __('description'); ?></h4>
                                <p><?php echo __('second_hand_long_desc'); ?></p>
                            </div>
                            <div class="mt-4">
                                <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Baskı Hatalı Çuvallar Modal -->
    <div class="modal fade" id="defectiveModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="defectiveCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/baskıHatalı.jpg" alt="Baskı Hatalı Çuval" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/baskıHatalı2.jpg" alt="Baskı Hatalı Çuval" class="img-fluid rounded">
                                        </div>
           
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#defectiveCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#defectiveCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#defectiveCarousel" data-bs-slide-to="0">
                                        <img src="assets/images/products/baskıHatalı.jpg" alt="Baskı Hatalı Çuval Thumbnail 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#defectiveCarousel" data-bs-slide-to="1">
                                        <img src="assets/images/products/baskıHatalı2.jpg" alt="Baskı Hatalı Çuval Thumbnail 2" class="img-fluid rounded">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2><?php echo __('defective_print_bags'); ?></h2>
                            <div class="features mt-4">
                                <h4><?php echo __('features'); ?></h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('defective_features')['print_errors']; ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('defective_features')['full_functional']; ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('defective_features')['cost_effective']; ?></li>
                                </ul>
                            </div>
                            <div class="description mt-4">
                                <h4><?php echo __('description'); ?></h4>
                                <p><?php echo __('defective_long_desc'); ?></p>
                            </div>
                            <div class="mt-4">
                                <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Q Big Bag Modal -->
    <div class="modal fade" id="qbigbagModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title"><?php echo __('q_bigbag'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="qbigbagCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/big-bag-1.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/big-bag-2.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/big-bag-1.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#qbigbagCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#qbigbagCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#qbigbagCarousel" data-bs-slide-to="0">
                                        <img src="assets/images/products/big-bag-1.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#qbigbagCarousel" data-bs-slide-to="1">
                                        <img src="assets/images/products/big-bag-2.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#qbigbagCarousel" data-bs-slide-to="2">
                                        <img src="assets/images/products/big-bag-1.jpg" alt="Q Big Bag" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <?php foreach (__('q_type_features') as $feature): ?>
                                        <li><i class="fas fa-check text-primary me-2"></i><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('q_bigbag_desc'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 40x60 Modal -->
    <div class="modal fade" id="pp4060Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider4060" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider4060" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider4060" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider4060" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider4060" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider4060" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_40x60'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 45x75 Modal -->
    <div class="modal fade" id="pp4575Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider4575" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider4575" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider4575" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider4575" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider4575" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider4575" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_45x75'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 55x85 Modal -->
    <div class="modal fade" id="pp5585Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider5585" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider5585" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider5585" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider5585" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider5585" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider5585" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_55x85'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 55x95 Modal -->
    <div class="modal fade" id="pp5595Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider5595" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider5595" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider5595" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider5595" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider5595" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider5595" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_55x95'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 60x90 Modal -->
    <div class="modal fade" id="pp6090Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider6090" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider6090" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider6090" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider6090" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider6090" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider6090" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_60x90'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 65x105 Modal -->
    <div class="modal fade" id="pp65105Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider65105" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider65105" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider65105" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider65105" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider65105" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider65105" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_65x105'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PP 75x115 Modal -->
    <div class="modal fade" id="pp75115Modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div id="productImageSlider75115" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Image 1" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Image 2" class="img-fluid rounded">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Image 3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageSlider75115" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productImageSlider75115" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                                <div class="thumbnail-images d-flex mt-3 overflow-auto">
                                    <div class="thumbnail me-2 active" data-bs-target="#productImageSlider75115" data-bs-slide-to="0">
                                        <img src="assets/images/products/white-pp-bag.jpg" alt="PP Bag Preview 1" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider75115" data-bs-slide-to="1">
                                        <img src="assets/images/products/white-pp-bag-2.jpg" alt="PP Bag Preview 2" class="img-fluid rounded">
                                    </div>
                                    <div class="thumbnail me-2" data-bs-target="#productImageSlider75115" data-bs-slide-to="2">
                                        <img src="assets/images/products/pp_çuval11.jpg" alt="PP Bag Preview 3" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php echo __('pp_bag_75x115'); ?></h2>
                            <div class="features mb-4">
                                <h4><?php echo __('features'); ?>:</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('high_durability'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('uv_protection'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('moisture_resistance'); ?></li>
                                    <li><i class="fas fa-check text-primary me-2"></i><?php echo __('lightweight'); ?></li>
                                </ul>
                            </div>
                            <div class="description mb-4">
                                <h4><?php echo __('description'); ?>:</h4>
                                <p><?php echo __('pp_bag_description'); ?></p>
                            </div>
                            <a href="https://wa.me/905461898488" class="btn btn-primary w-100" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i><?php echo __('price_and_order'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?> 