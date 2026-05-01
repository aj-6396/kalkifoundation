document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle mobile menu
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });
    }

    // Optional: Close mobile menu when a link is clicked
    const mobileLinks = document.querySelectorAll('.mobile-nav a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
        });
    });
});
/* =========================================
       IMPACT COUNTER ANIMATION
       ========================================= */
    function animateNumber(elementId, targetNumber, duration) {
        const numberElement = document.getElementById(elementId);
        if (!numberElement) return;

        let startNumber = 0;
        const increment = targetNumber / (duration / 100);

        const interval = setInterval(() => {
            startNumber += increment;
            if (startNumber >= targetNumber) {
                startNumber = targetNumber;
                clearInterval(interval);
            }
            numberElement.textContent = Math.floor(startNumber) + '+';
        }, 100);
    }

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.id === 'numberlives') {
                    animateNumber('numberlives', 5000, 1300);
                } else if (entry.target.id === 'numberblood') {
                    animateNumber('numberblood', 1300, 1300);
                }
                observer.unobserve(entry.target); 
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
    
    const numberLivesElement = document.getElementById('numberlives');
    const numberBloodElement = document.getElementById('numberblood');
    
    if (numberLivesElement) observer.observe(numberLivesElement);
    if (numberBloodElement) observer.observe(numberBloodElement);