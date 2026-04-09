document.addEventListener('DOMContentLoaded', () => {

    // Initialize Swiper
    if (typeof Swiper !== 'undefined') {
        new Swiper(".heroSwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const siteNavigation = document.querySelector('#site-navigation');
    const headerActions = document.querySelector('.header-actions');

    if (menuToggle && siteNavigation) {
        menuToggle.addEventListener('click', function() {
            siteNavigation.classList.toggle('toggled');
            if (headerActions) {
                // Ensure the region selector and buttons are also visible inside the toggled menu context if needed.
                // We'll append headerActions to siteNavigation on mobile to make it accessible.
                if (window.innerWidth <= 768) {
                    if (!siteNavigation.contains(headerActions)) {
                        siteNavigation.appendChild(headerActions);
                        headerActions.classList.add('mobile-visible');
                    }
                }
            }
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
        });
    }

    // Header Scroll Effect
    const header = document.querySelector('.sticky-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.background = 'rgba(5, 5, 5, 0.95)';
            header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.5)';
        } else {
            header.style.background = 'rgba(5, 5, 5, 0.8)';
            header.style.boxShadow = 'none';
        }
    });

    // GSAP Animations
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Fade Up Elements
        gsap.utils.toArray('.gsap-fade-up').forEach(element => {
            gsap.fromTo(element,
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 85%',
                    }
                }
            );
        });

        // Stagger Cards
        ScrollTrigger.batch('.gsap-stagger-card', {
            onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, duration: 0.8, ease: 'power3.out', overwrite: true }),
            start: 'top 85%',
        });
        gsap.set('.gsap-stagger-card', { y: 50, opacity: 0 });
    }

    // Dynamic Region Pricing from WP Backend
    const regionSelect = document.getElementById('region-select');
    const priceValue = document.querySelector('.price-value');
    const offerTitle = document.querySelector('.offer-brand');
    const offerDesc = document.querySelector('.offer-title');

    if (regionSelect && priceValue && typeof xiwoOfferData !== 'undefined') {
        regionSelect.addEventListener('change', (e) => {
            const region = e.target.value;
            let data = xiwoOfferData[region];

            // Fallback if region not found or empty selected
            if (!data) {
                data = xiwoOfferData['default'] || { price: '39,99', brand: 'GOXIWO VIVA', title: 'Internet illimité<br>Sans engagement' };
            }

            // Animation out
            gsap.to([priceValue, offerTitle, offerDesc], { opacity: 0, duration: 0.3, onComplete: () => {

                // Update logic based on real DB data
                priceValue.textContent = data.price;
                offerTitle.textContent = data.brand;
                offerDesc.innerHTML = data.title;

                // Animation in
                gsap.to([priceValue, offerTitle, offerDesc], { opacity: 1, duration: 0.3 });
            }});
        });
    }

    // Engagement Toggle Logic
    const toggleRadios = document.querySelectorAll('input[name="engagement"]');
    const engagementTexts = document.querySelectorAll('.card-engagement-text, .feature-engagement-text');

    if (toggleRadios.length > 0 && engagementTexts.length > 0) {
        toggleRadios.forEach(radio => {
            radio.addEventListener('change', (e) => {
                const isEngaged = e.target.value === 'avec';
                const newText = isEngaged ? 'Avec engagement' : 'Sans engagement';

                // Animate text change
                if (typeof gsap !== 'undefined') {
                    gsap.to(engagementTexts, {
                        opacity: 0,
                        duration: 0.2,
                        onComplete: () => {
                            engagementTexts.forEach(el => {
                                // Only change text if it currently says "Sans engagement" or "Avec engagement"
                                if (el.textContent.includes('engagement')) {
                                     el.textContent = newText;
                                }
                            });
                            gsap.to(engagementTexts, { opacity: 1, duration: 0.2 });
                        }
                    });
                } else {
                    engagementTexts.forEach(el => {
                        if (el.textContent.includes('engagement')) {
                             el.textContent = newText;
                        }
                    });
                }
            });
        });
    }
});