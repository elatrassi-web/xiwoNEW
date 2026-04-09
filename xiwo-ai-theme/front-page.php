<?php
/**
 * The template for the front page
 */

get_header();
?>

<main id="primary" class="site-main front-page-main">

    <!-- NEW HERO SECTION -->
    <section class="hero-section hero-new">
        <div class="hero-bg-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png" alt="XIWO Background" class="hero-static-bg">
            <div class="hero-overlay-dark"></div>
            <div class="hero-overlay-gradient"></div>
        </div>

        <div class="container hero-content-wrapper">
            <div class="hero-text-content gsap-fade-up">
                <h1 class="hero-main-title">
                    <span class="text-white">XIWO, un réseau présent en</span><br>
                    <span class="neon-text">France & Caraibe</span>
                </h1>

                <p class="hero-main-subtitle">
                    XIWO connecte les territoires là ou les autres s'arretent. Fibre et solutions sans fil déployées avec exigence pour les particuliers et les professionnels
                </p>

                <div class="hero-stats glass-panel-dark">
                    <span class="stat-item"><span class="neon-text stat-value">5</span> territoires</span>
                    <span class="stat-divider">|</span>
                    <span class="stat-item"><span class="neon-text stat-value">+100 000</span> clients connectés</span>
                    <span class="stat-divider">|</span>
                    <span class="stat-item"><span class="neon-text stat-value">1</span> ambition</span>
                </div>

                <div class="hero-main-actions">
                    <a href="#eligibilite" class="btn-neon">Tester mon éligibilité dans ma zone</a>
                    <a href="#reseau" class="btn-outline-glass">Découvrir le réseau</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF SECTION -->
    <section class="social-proof-section gsap-fade-up">
        <div class="container">
            <h2 class="social-proof-title">Déjà des centaines de clients<br>ont choisi <span class="neon-text">GOXIWO</span></h2>
            <ul class="social-proof-list">
                <li><span class="check-icon">✓</span> Service testé et approuvé en Guadeloupe</li>
                <li><span class="check-icon">✓</span> Satisfait ou remboursé</li>
                <li><span class="check-icon">✓</span> Support client réactif</li>
            </ul>
        </div>
    </section>

    <!-- COMMENT CA MARCHE SECTION -->
    <section class="how-it-works-section">
        <div class="container">
            <h2 class="section-title gsap-fade-up">Comment ça marche?</h2>
            <div class="steps-grid">
                <div class="step-card glass-panel gsap-stagger-card">
                    <div class="step-number">1</div>
                    <h3>Tu commandes</h3>
                    <p>En quelques clics</p>
                </div>
                <div class="step-card glass-panel gsap-stagger-card">
                    <div class="step-number">2</div>
                    <h3>Tu branches</h3>
                    <p>Aucune installation compliquée</p>
                </div>
                <div class="step-card glass-panel gsap-stagger-card">
                    <div class="step-number">3</div>
                    <h3>Tu profites</h3>
                    <p>Internet immédiat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OFFER SECTION -->
    <section id="offres" class="dynamic-offer-section gsap-fade-up">
        <div class="container">
            <div class="offer-container glass-panel">
                <div class="offer-content">
                    <div class="offer-brand">GOXIWO VIVA</div>
                    <h2 class="offer-title">Internet illimité<br>Sans engagement</h2>

                    <!-- Dynamic Data Placeholder -->
                    <div class="offer-price-display" id="dynamic-price-container">
                        <span class="price-value neon-text">39,99</span><span class="price-currency neon-text">€</span><span class="price-period">/mois</span>
                    </div>

                    <a href="#" class="btn-neon">Je m'abonne</a>
                    <p class="offer-note">Test à 15€ seulement.</p>
                </div>
                <div class="offer-image">
                    <!-- Router box placeholder -->
                    <div class="router-mockup">
                        <div class="router-glow"></div>
                        <img src="https://image.pollinations.ai/prompt/futuristic%20black%20internet%20router%20box%20glowing%20green%20neon%20lights%20dark%20room%20cyberpunk?width=800&height=500&nologo=true" alt="Goxiwo Box" class="router-img">
                        <div class="router-branding">GOXIWO</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="final-cta-section gsap-fade-up">
        <div class="container text-center">
            <h2 class="cta-title">Tu attends quoi ?</h2>
            <p class="cta-subtitle">Passe à <span class="neon-text">GOXIWO</span> dès aujourd'hui.</p>
            <a href="#offres" class="btn-neon">Je passe à GOXIWO</a>
        </div>
    </section>

</main>

<?php
get_footer();
