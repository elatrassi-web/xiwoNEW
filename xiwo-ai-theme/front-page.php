<?php
/**
 * The template for the front page
 */

get_header();
?>

<main id="primary" class="site-main front-page-main">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="glow-orb orb-1"></div>
            <div class="glow-orb orb-2"></div>
            <div class="grid-overlay"></div>
        </div>

        <div class="container hero-content">
            <div class="hero-text gsap-fade-up">
                <span class="badge-neon">Technologie Fibre 2030</span>
                <h1 class="hero-title">L'expérience <br><span class="neon-text">Ultime</span>.</h1>
                <p class="hero-subtitle">Internet, Téléphonie Fixe et TV. Connectez-vous au futur avec des débits jusqu'à 5 Gbit/s.</p>
                <div class="hero-actions">
                    <a href="#offres" class="btn-neon">Découvrir les offres</a>
                    <a href="#eligibilite" class="btn-outline">Tester mon éligibilité</a>
                </div>
            </div>

            <div class="hero-image gsap-fade-left">
                <!-- Espace pour une illustration 3D/IA de box internet -->
                <div class="box-mockup glass-panel">
                    <div class="box-glow"></div>
                    <h3>XIWO BOX <span class="neon-text">GEN-Z</span></h3>
                    <div class="speed-indicator">
                        <div class="speed-bar"></div>
                        <span>5 GB/S</span>
                    </div>
                </div>
            </div>
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
