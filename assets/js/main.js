// Slider otomatik geçiş ayarları
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS with custom settings
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // Product Filtering System
    const mainFilterButtons = document.querySelectorAll('.filter-buttons .btn');
    const subFilterButtons = document.querySelectorAll('.sub-filter-buttons .btn');
    const productItems = document.querySelectorAll('.product-item');
    let currentMainFilter = 'all';
    let currentSubFilter = null;

    // Hide all sub-filters initially
    function hideAllSubFilters() {
        subFilterButtons.forEach(btn => {
            btn.style.display = 'none';
            btn.classList.remove('active');
        });
    }

    // Show relevant sub-filters with animation
    function showSubFilters(mainCategory) {
        hideAllSubFilters();
        const relevantButtons = mainCategory === 'all' 
            ? subFilterButtons 
            : document.querySelectorAll(`.${mainCategory}-sub`);

        relevantButtons.forEach((btn, index) => {
            setTimeout(() => {
                btn.style.display = 'inline-block';
                btn.style.animation = 'fadeInUp 0.4s ease forwards';
            }, index * 100);
        });
    }

    // Filter products with smooth transitions
    function filterProducts(mainCategory, subCategory = null) {
        const activeFeatureFilters = Array.from(document.querySelectorAll('.feature-filters .btn.active')).map(btn => btn.getAttribute('data-feature'));
        const activeSizeFilter = document.querySelector('.size-filters .btn.active');
        
        productItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            const itemFeatures = item.getAttribute('data-features')?.split(',') || [];
            const itemSize = item.getAttribute('data-size');
            
            let shouldShow = true;

            // Ana kategori kontrolü
            if (mainCategory !== 'all') {
                if (mainCategory === 'new') {
                    shouldShow = !['second-hand', 'defective'].includes(itemCategory);
                } else {
                    shouldShow = itemCategory === mainCategory;
                }
            }

            // Alt kategori kontrolü
            if (shouldShow && subCategory) {
                shouldShow = itemCategory === subCategory;
            }

            // Özellik filtreleri kontrolü - Birden fazla özellik için kontrol
            if (shouldShow && activeFeatureFilters.length > 0) {
                shouldShow = activeFeatureFilters.every(feature => itemFeatures.includes(feature));
            }

            // Boyut filtresi kontrolü
            if (shouldShow && activeSizeFilter) {
                const sizeValue = activeSizeFilter.getAttribute('data-size');
                shouldShow = itemSize === sizeValue;
            }

            // Görünürlüğü ayarla
            if (shouldShow) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 50);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    }

    // Main category filter click handler
    mainFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');
            
            // Update active states
            mainFilterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentMainFilter = filterValue;
            currentSubFilter = null;

            // Show relevant sub-filters
            showSubFilters(filterValue);
            
            // Filter products
            filterProducts(filterValue);

            // Scroll to products section smoothly
            document.querySelector('.products').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        });
    });

    // Sub-category filter click handler
    subFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterValue = button.getAttribute('data-filter');
            
            // Update active states
            subFilterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            currentSubFilter = filterValue;

            // Filter products
            filterProducts(currentMainFilter, filterValue);
        });
    });

    // Initialize filters on page load
    window.addEventListener('load', () => {
        const allButton = document.querySelector('.filter-buttons .btn[data-filter="all"]');
        if (allButton) {
            allButton.classList.add('active');
            showSubFilters('all');
        }

        // Add initial animation delay to products
        productItems.forEach((item, index) => {
            item.style.animationDelay = `${index * 100}ms`;
        });
    });

    // Handle browser back/forward buttons
    window.addEventListener('popstate', () => {
        const hash = window.location.hash.slice(1);
        if (hash) {
            const targetButton = document.querySelector(`[data-filter="${hash}"]`);
            if (targetButton) {
                targetButton.click();
            }
        }
    });

    // Tüm carousel'ları touch-enabled yap ve slide olaylarını dinle
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        // Carousel'ı başlat
        new bootstrap.Carousel(carousel, {
            interval: 5000, // 5 saniye
            touch: true,
            wrap: true,
            pause: 'hover' // Mouse üzerine geldiğinde durdur
        });

        // Slide değişim olayını dinle
        carousel.addEventListener('slide.bs.carousel', function(event) {
            const slideIndex = event.to;
            const modal = carousel.closest('.modal');
            if (modal) {
                const thumbnails = modal.querySelectorAll('.thumbnail');
                // Tüm thumbnail'lerden active sınıfını kaldır
                thumbnails.forEach(thumb => thumb.classList.remove('active'));
                // Yeni slide'a karşılık gelen thumbnail'e active sınıfını ekle
                if (thumbnails[slideIndex]) {
                    thumbnails[slideIndex].classList.add('active');
                }
            }
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    }

    // Contact form AJAX submission
    const contactForm = document.querySelector('form[action="process-contact.php"]');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('process-contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Başarılı!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Tamam'
                    });
                    contactForm.reset();
                } else {
                    Swal.fire({
                        title: 'Hata!',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'Tamam'
                    });
                }
            })
            .catch(error => {
                console.error('Hata:', error);
                Swal.fire({
                    title: 'Hata!',
                    text: 'Bir hata oluştu. Lütfen daha sonra tekrar deneyin.',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                });
            });
        });
    }

    // Modal içindeki thumbnail tıklama olaylarını yönet
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => {
        modal.addEventListener('show.bs.modal', function() {
            const thumbnails = this.querySelectorAll('.thumbnail');
            const carousel = this.querySelector('.carousel');
            
            thumbnails.forEach((thumbnail, index) => {
                thumbnail.addEventListener('click', function() {
                    // Aktif thumbnail'i güncelle
                    thumbnails.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Carousel'ı ilgili slide'a getir
                    if (carousel) {
                        const carouselInstance = bootstrap.Carousel.getInstance(carousel);
                        if (carouselInstance) {
                            carouselInstance.to(index);
                        }
                    }
                });
            });
        });
    });

    // Ürün Filtreleme Sistemi
    const filterButtons = document.querySelectorAll('.filter-buttons button');
    const sizeButtons = document.querySelectorAll('.size-filters button');
    const featureButtons = document.querySelectorAll('.feature-filters button');
    const clearFiltersBtn = document.getElementById('clearFilters');

    let activeFilters = {
        category: 'all',
        size: [],
        features: []
    };

    // Kategori Filtreleme
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            activeFilters.category = button.getAttribute('data-filter');
            applyFilters();
        });
    });

    // Boyut Filtreleme
    sizeButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
            const size = button.getAttribute('data-size');
            if (button.classList.contains('active')) {
                activeFilters.size.push(size);
            } else {
                activeFilters.size = activeFilters.size.filter(s => s !== size);
            }
            applyFilters();
        });
    });

    // Özellik Filtreleme
    featureButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('active');
            const feature = button.getAttribute('data-feature');
            if (button.classList.contains('active')) {
                activeFilters.features.push(feature);
            } else {
                activeFilters.features = activeFilters.features.filter(f => f !== feature);
            }
            applyFilters();
        });
    });

    // Filtreleri Temizle
    clearFiltersBtn.addEventListener('click', () => {
        activeFilters = {
            category: 'all',
            size: [],
            features: []
        };
        
        filterButtons.forEach(btn => btn.classList.remove('active'));
        filterButtons[0].classList.add('active');
        
        sizeButtons.forEach(btn => btn.classList.remove('active'));
        featureButtons.forEach(btn => btn.classList.remove('active'));
        
        applyFilters();
    });

    // Filtreleri Uygula
    function applyFilters() {
        productItems.forEach(item => {
            const category = item.getAttribute('data-category');
            const size = item.getAttribute('data-size');
            const features = item.getAttribute('data-features')?.split(',') || [];
            
            let showItem = true;

            // Kategori kontrolü
            if (activeFilters.category !== 'all' && category !== activeFilters.category) {
                showItem = false;
            }

            // Boyut kontrolü
            if (activeFilters.size.length > 0 && !activeFilters.size.includes(size)) {
                showItem = false;
            }

            // Özellik kontrolü
            if (activeFilters.features.length > 0) {
                activeFilters.features.forEach(feature => {
                    if (!features.includes(feature)) {
                        showItem = false;
                    }
                });
            }

            // Görünürlüğü ayarla
            if (showItem) {
                item.style.display = '';
                item.style.animation = 'fadeIn 0.5s ease-in-out';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Özellik filtresi için click handler ekle
    document.querySelectorAll('.feature-filters .btn').forEach(button => {
        button.addEventListener('click', () => {
            // Aktif durumu güncelle
            document.querySelectorAll('.feature-filters .btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Ürünleri filtrele
            filterProducts(currentMainFilter, currentSubFilter);
        });
    });

    // Boyut filtresi için click handler ekle
    document.querySelectorAll('.size-filters .btn').forEach(button => {
        button.addEventListener('click', () => {
            // Aktif durumu güncelle
            document.querySelectorAll('.size-filters .btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            // Ürünleri filtrele
            filterProducts(currentMainFilter, currentSubFilter);
        });
    });

    // Filtreleri temizle butonu için handler ekle
    document.getElementById('clearFilters').addEventListener('click', () => {
        // Tüm aktif filtreleri kaldır
        document.querySelectorAll('.filter-buttons .btn, .sub-filter-buttons .btn, .feature-filters .btn, .size-filters .btn')
            .forEach(btn => btn.classList.remove('active'));
        
        // Ana kategori filtresini "Tümü" olarak ayarla
        const allButton = document.querySelector('.filter-buttons .btn[data-filter="all"]');
        if (allButton) {
            allButton.classList.add('active');
            currentMainFilter = 'all';
            currentSubFilter = null;
        }
        
        // Ürünleri yeniden filtrele
        filterProducts('all');
    });
});

// Ürün galerisi görsel değiştirme fonksiyonu
function changeImage(thumbnail, imageSrc) {
    if (!thumbnail || !imageSrc) return;
    
    // Ana görseli güncelle
    const mainImage = document.getElementById('mainImage');
    if (mainImage) {
        mainImage.src = imageSrc;
    }
    
    // Aktif thumbnail'i güncelle
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumb => {
        thumb.classList.remove('active');
    });
    thumbnail.classList.add('active');
}

// Animasyon keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(style);

// WebP support detection
function supportsWebP() {
    const elem = document.createElement('canvas');
    if (!!(elem.getContext && elem.getContext('2d'))) {
        return elem.toDataURL('image/webp').indexOf('data:image/webp') === 0;
    }
    return false;
}

// Add webp class to HTML if supported
if (supportsWebP()) {
    document.documentElement.classList.add('webp');
} else {
    document.documentElement.classList.add('no-webp');
} 