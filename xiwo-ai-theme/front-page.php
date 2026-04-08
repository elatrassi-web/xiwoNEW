<?php
/**
 * The template for the front page
 */

get_header();
?>

<main id="primary" class="site-main front-page-main">

    <!-- HERO SLIDER SECTION -->
    <section class="hero-slider-section">
        <!-- Swiper -->
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1: XIWO BOX -->
                <div class="swiper-slide">
                    <div class="slide-bg orb-bg-1"></div>
                    <div class="grid-overlay"></div>
                    <div class="container hero-content">
                        <div class="hero-text">
                            <span class="badge-neon">Technologie IA 2030</span>
                            <h1 class="hero-title">La Nouvelle <br><span class="neon-text">XIWO BOX</span>.</h1>
                            <p class="hero-subtitle">Le centre de contrôle intelligent de votre domicile connecté. Puissance absolue et design épuré.</p>
                            <div class="hero-actions">
                                <a href="#offres" class="btn-neon">Découvrir les offres</a>
                            </div>
                        </div>
                        <div class="hero-image slide-image-animation">
                            <div class="box-mockup glass-panel">
                                <div class="box-glow pulse-fast"></div>
                                <h3>XIWO <span class="neon-text">CORE</span></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Vitesse Fibre -->
                <div class="swiper-slide">
                    <div class="slide-bg orb-bg-2"></div>
                    <div class="grid-overlay fast-grid"></div>
                    <div class="container hero-content">
                        <div class="hero-text">
                            <span class="badge-neon">Fibre UPMAX</span>
                            <h1 class="hero-title">Vitesse <br><span class="neon-text">Hyper-Luminique</span>.</h1>
                            <p class="hero-subtitle">Jusqu'à 5 Gbit/s partagés. Plus de latence, juste la vitesse pure pour tous vos usages.</p>
                            <div class="hero-actions">
                                <a href="#eligibilite" class="btn-outline">Tester mon éligibilité</a>
                            </div>
                        </div>
                        <div class="hero-image slide-image-animation">
                            <div class="speed-mockup glass-panel">
                                <div class="speed-rings"></div>
                                <div class="speed-number neon-text">5 <span style="font-size: 1rem;">GB/S</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Divertissement -->
                <div class="swiper-slide">
                    <div class="slide-bg orb-bg-3"></div>
                    <div class="grid-overlay"></div>
                    <div class="container hero-content">
                        <div class="hero-text">
                            <span class="badge-neon">Expérience Visuelle</span>
                            <h1 class="hero-title">Une TV <br><span class="neon-text">Augmentée</span>.</h1>
                            <p class="hero-subtitle">Une interface pilotée par IA qui comprend ce que vous voulez regarder avant même que vous ne le demandiez.</p>
                            <div class="hero-actions">
                                <a href="#" class="btn-neon">Voir le bouquet TV</a>
                            </div>
                        </div>
                        <div class="hero-image slide-image-animation">
                            <div class="tv-mockup glass-panel">
                                <div class="hologram-effect"></div>
                                <h3>XIWO <span class="neon-text">VISION</span></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- SECTION OFFRES PRINCIPALES -->
    <section id="offres" class="offers-section">
        <div class="container">
            <div class="section-header gsap-fade-up">
                <h2>Choisissez votre <span class="neon-text">connexion</span></h2>
                <p>Des offres adaptées à votre zone géographique.</p>
            </div>

            <div class="offers-grid">
                <!-- Offre SMART+ -->
                <div class="offer-card glass-panel gsap-stagger-card">
                    <div class="offer-header">
                        <h3 class="offer-name">SMART+</h3>
                        <div class="offer-speed">Jusqu'à 1 Gbit/s</div>
                    </div>
                    <div class="offer-price">
                        <span class="price-value">39€99</span>
                        <span class="price-period">/mois</span>
                    </div>
                    <p class="offer-promo">Pendant 2 Mois puis 49.99€/mois.<br>Sans engagement</p>
                    <ul class="offer-features">
                        <li>Fibre ultra-rapide</li>
                        <li>Dernière génération Wi-Fi</li>
                        <li>Nouvelle expérience TV</li>
                    </ul>
                    <a href="#" class="btn-outline offer-btn">Sélectionner</a>
                </div>

                <!-- Offre UPMAX -->
                <div class="offer-card glass-panel featured-offer gsap-stagger-card">
                    <div class="offer-badge">Le plus puissant</div>
                    <div class="offer-header">
                        <h3 class="offer-name neon-text">UPMAX</h3>
                        <div class="offer-speed">Jusqu'à 5 Gbit/s</div>
                    </div>
                    <div class="offer-price">
                        <span class="price-value neon-text">49€99</span>
                        <span class="price-period">/mois</span>
                    </div>
                    <p class="offer-promo">Pendant 2 Mois puis 59.99€/mois.<br>Sans engagement</p>
                    <ul class="offer-features">
                        <li>Technologie Fibre 2.4 GPON</li>
                        <li>Connexion simultanée extrême</li>
                        <li>Tous vos contenus favoris inclus</li>
                    </ul>
                    <a href="#" class="btn-neon offer-btn">Sélectionner</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION SERVICES -->
    <section class="services-section">
        <div class="container">
            <div class="services-grid">
                <div class="service-card glass-panel gsap-fade-up">
                    <div class="service-icon neon-text">🌐</div>
                    <h3>Internet Puissance Max</h3>
                    <p>Une stabilité à toute épreuve pour vos sessions de jeu, de streaming ou de télétravail.</p>
                </div>
                <div class="service-card glass-panel gsap-fade-up">
                    <div class="service-icon neon-text">📺</div>
                    <h3>XIWO TV</h3>
                    <p>Une variété de chaînes pour tous avec une qualité d'image époustouflante.</p>
                </div>
                <div class="service-card glass-panel gsap-fade-up">
                    <div class="service-icon neon-text">🎧</div>
                    <h3>Assistance IA 24/7</h3>
                    <p>Un support client réactif et intelligent pour répondre à toutes vos questions.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
