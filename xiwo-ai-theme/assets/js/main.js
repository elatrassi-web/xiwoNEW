/**
 * XIWO AI 2030 - Main Scripts
 * Handles interactions and GSAP Animations
 */

document.addEventListener("DOMContentLoaded", (event) => {

    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // 1. Header Scroll Effect
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.background = 'rgba(10, 10, 12, 0.9)';
            header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.5)';
        } else {
            header.style.background = 'rgba(10, 10, 12, 0.7)';
            header.style.boxShadow = 'none';
        }
    });

    // 2. Initialize Swiper for Hero Section
    if (document.querySelector('.heroSwiper')) {
        const swiper = new Swiper('.heroSwiper', {
            direction: 'horizontal',
            loop: true,
            effect: 'fade', // Smooth crossfade effect
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            grabCursor: true,
        });
    }

    // 3. Scroll Animations for Sections
    // Fade up elements on scroll
    gsap.utils.toArray('.section-header, .service-card').forEach(element => {
        gsap.fromTo(element,
            { y: 50, opacity: 0 },
            {
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%", // Trigger when top of element hits 80% of viewport
                    toggleActions: "play none none reverse"
                },
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: "power2.out"
            }
        );
    });

    // Staggered cards (Offers)
    if(document.querySelector('.offers-grid')) {
        gsap.fromTo('.gsap-stagger-card',
            { y: 50, opacity: 0 },
            {
                scrollTrigger: {
                    trigger: '.offers-grid',
                    start: "top 75%",
                },
                y: 0,
                opacity: 1,
                duration: 0.6,
                stagger: 0.2,
                ease: "power2.out"
            }
        );
    }

    // 4. Region Selector Interaction
    const regionSelect = document.getElementById('region-select');
    if(regionSelect) {
        regionSelect.addEventListener('change', function() {
            const val = this.value;
            if(val) {
                // Here we would typically redirect or filter via AJAX
                // For demonstration, we just show a subtle pulse effect
                gsap.to(this, {
                    boxShadow: "0 0 15px rgba(154, 186, 100, 0.8)",
                    duration: 0.3,
                    yoyo: true,
                    repeat: 1
                });
            }
        });
    }

    // 5. Mouse move effect on glass panels
    const glassPanels = document.querySelectorAll('.glass-panel');
    glassPanels.forEach(panel => {
        panel.addEventListener('mousemove', (e) => {
            const rect = panel.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Update custom properties for potential CSS radial gradient effects
            panel.style.setProperty('--mouse-x', `${x}px`);
            panel.style.setProperty('--mouse-y', `${y}px`);
        });
    });

});
