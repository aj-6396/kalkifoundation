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
});