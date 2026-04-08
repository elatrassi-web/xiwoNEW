<?php
/**
 * The template for the front page
 */

get_header();
?>

<main id="primary" class="site-main front-page-main">

    <!-- HERO SECTION (SLIDER) -->
    <section class="hero-section">
        <div class="swiper heroSwiper" style="width: 100%; height: 100%;">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="hero-bg-image">
                        <img src="https://image.pollinations.ai/prompt/cyberpunk%20couple%20on%20couch%20watching%20holographic%20screen%20green%20neon%20dark%20cinematic?width=2000&height=1000&nologo=true" alt="Couple on couch using internet">
                        <div class="hero-overlay"></div>
                        <div class="hero-glow-line"></div>
                    </div>
                    <div class="container hero-content" style="height: 100%; display: flex; align-items: center;">
                        <div class="hero-text gsap-fade-up">
                            <h1 class="hero-title">Internet sans<br>prise de tête.</h1>
                            <p class="hero-subtitle">Tu branches. Ça marche.<br>Simple, rapide, sans engagement.</p>
                            <div class="hero-actions">
                                <a href="#offres" class="btn-neon">Je passe à GOXIWO</a>
                                <a href="#eligibilite" class="btn-outline-glass">Tester mon adresse</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="hero-bg-image">
                        <img src="https://image.pollinations.ai/prompt/abstract%20hyper%20speed%20fiber%20optic%20cables%20glowing%20green%20neon%20dark%20background%20technology?width=2000&height=1000&nologo=true" alt="Abstract technology">
                        <div class="hero-overlay"></div>
                        <div class="hero-glow-line"></div>
                    </div>
                    <div class="container hero-content" style="height: 100%; display: flex; align-items: center;">
                        <div class="hero-text">
                            <h1 class="hero-title">Vitesse<br><span class="neon-text">Hyper-Luminique</span>.</h1>
                            <p class="hero-subtitle">Jusqu'à 5 Gbit/s partagés. Plus de latence, juste la vitesse pure.</p>
                            <div class="hero-actions">
                                <a href="#offres" class="btn-neon">Découvrir l'offre</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="hero-bg-image">
                        <img src="https://image.pollinations.ai/prompt/futuristic%20black%20internet%20router%20box%20glowing%20green%20neon%20lights%20dark%20room%20cyberpunk?width=2000&height=1000&nologo=true" alt="Technology router">
                        <div class="hero-overlay"></div>
                        <div class="hero-glow-line"></div>
                    </div>
                    <div class="container hero-content" style="height: 100%; display: flex; align-items: center;">
                        <div class="hero-text">
                            <h1 class="hero-title">La Nouvelle<br><span class="neon-text">XIWO BOX</span>.</h1>
                            <p class="hero-subtitle">Le centre de contrôle intelligent de votre domicile connecté.</p>
                            <div class="hero-actions">
                                <a href="#offres" class="btn-neon">Voir les box</a>
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
