document.addEventListener('DOMContentLoaded', () => {
    // ── Mobile menu ──────────────────────────────────────────────────────────
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });
    }

    const mobileLinks = document.querySelectorAll('.mobile-nav a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileMenu) mobileMenu.classList.remove('open');
        });
    });

    // ── Impact counter animation ──────────────────────────────────────────────
    function animateNumber(elementId, targetNumber, duration) {
        const el = document.getElementById(elementId);
        if (!el) return;

        let current = 0;
        const increment = targetNumber / (duration / 50);
        const interval = setInterval(() => {
            current += increment;
            if (current >= targetNumber) {
                current = targetNumber;
                clearInterval(interval);
            }
            el.textContent = Math.floor(current).toLocaleString('en-IN') + '+';
        }, 50);
    }

    const counterMap = {
        'numberblood':  1500,
        'numbermental': 2500,
        'numberpads':   2000,
        'numberwaste':  350,
        'numberlives':  10000
    };

    const counterObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                if (counterMap[id] !== undefined) {
                    animateNumber(id, counterMap[id], 1400);
                }
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    Object.keys(counterMap).forEach(id => {
        const el = document.getElementById(id);
        if (el) counterObserver.observe(el);
    });

    // ── Hero background slideshow ───────────────────────────────────────────
    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        const images = [];

        // 1. Get initial background image from inline styles or computed styles
        let initialBg = '';
        const inlineStyle = heroSection.getAttribute('style') || '';
        const urlMatch = inlineStyle.match(/url\(['"]?([^'")]*)['"]?\)/);
        if (urlMatch && urlMatch[1]) {
            initialBg = urlMatch[1];
        } else {
            const computedStyle = window.getComputedStyle(heroSection).backgroundImage;
            const computedMatch = computedStyle.match(/url\(['"]?([^'")]*)['"]?\)/);
            if (computedMatch && computedMatch[1]) {
                initialBg = computedMatch[1];
            }
        }
        if (initialBg && !initialBg.includes('none')) {
            images.push(initialBg);
        }

        // 2. Extract images from about gallery (for index.php)
        document.querySelectorAll('.about-gallery img').forEach(img => {
            if (img.src && !images.includes(img.src)) {
                images.push(img.src);
            }
        });

        // 3. Extract images from single initiative/drive galleries or page content
        document.querySelectorAll('.initiative-single-page img, .gallery-slide img').forEach(img => {
            if (img.src && !images.includes(img.src)) {
                images.push(img.src);
            }
        });

        // 4. Filter and sanitize collected image URLs (filter out logos, volunteer avatars, small icons, and placeholders)
        const validImages = images.filter(src => {
            return src &&
                !src.includes('logo') &&
                !src.includes('icon') &&
                !src.includes('avatar') &&
                !src.includes('placeholder') &&
                !src.includes('150x150'); // filter out thumbnail sizes
        });

        // 5. If we have at least 2 images, build the dynamic background slider!
        if (validImages.length >= 2) {
            const sliderContainer = document.createElement('div');
            sliderContainer.className = 'hero-bg-slider';

            const slides = [];
            validImages.forEach((src, index) => {
                const slide = document.createElement('div');
                slide.className = `hero-bg-slide${index === 0 ? ' active' : ''}`;
                slide.style.backgroundImage = `url('${src}')`;
                sliderContainer.appendChild(slide);
                slides.push(slide);
            });

            heroSection.appendChild(sliderContainer);
            heroSection.classList.add('js-loaded');

            // Crossfade slides every 6 seconds
            let currentSlide = 0;
            setInterval(() => {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }, 6000);
        }
    }
});