(function ($) {
    "use strict";

    // ============================================
    // SMOOTH MARQUEE ANIMATION - RIGHT TO LEFT
    // ============================================
    function initMarquee() {
        const marqueeContainer = document.querySelector('.cea-marquee-list.scroll-left');

        if (!marqueeContainer) {
            console.warn('Marquee container not found');
            return;
        }

        // Configuration
        const config = {
            speed: 0.8, // pixels per frame (adjust for speed: higher = faster)
        };

        let animationId;
        let scrollPosition = 0;

        // Get all existing inner elements
        const allInners = marqueeContainer.querySelectorAll('.cea-marquee-inner');

        if (allInners.length === 0) return;

        // Clone all inner elements to create seamless loop
        allInners.forEach(inner => {
            const clone = inner.cloneNode(true);
            marqueeContainer.appendChild(clone);
        });

        // Get the total width of all original inner elements
        let totalWidth = 0;
        allInners.forEach(inner => {
            totalWidth += inner.offsetWidth;
        });

        function animate() {
            scrollPosition += config.speed;

            // Reset position when all originals scroll completely off screen
            if (scrollPosition >= totalWidth) {
                scrollPosition = 0;
            }

            // Apply transform to all inner elements (originals + clones)
            const allCurrentInners = marqueeContainer.querySelectorAll('.cea-marquee-inner');
            allCurrentInners.forEach(inner => {
                inner.style.transform = `translateX(-${scrollPosition}px)`;
            });

            animationId = requestAnimationFrame(animate);
        }

        // Start animation
        animate();

        // Pause on hover (optional)
        marqueeContainer.addEventListener('mouseenter', function () {
            cancelAnimationFrame(animationId);
        });

        marqueeContainer.addEventListener('mouseleave', function () {
            animate();
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function () {
                cancelAnimationFrame(animationId);

                // Recalculate total width
                totalWidth = 0;
                const originals = Array.from(marqueeContainer.querySelectorAll('.cea-marquee-inner')).slice(0, allInners.length);
                originals.forEach(inner => {
                    totalWidth += inner.offsetWidth;
                });

                scrollPosition = 0;
                animate();
            }, 250);
        });
    }

    // Initialize marquee when document is ready
    $(document).ready(function () {
        initMarquee();
    });

})(jQuery);