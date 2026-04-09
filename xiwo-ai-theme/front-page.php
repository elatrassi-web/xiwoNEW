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

    <!-- TERRITOIRES SECTION -->
    <section class="territories-section gsap-fade-up">
        <div class="container">
            <div class="territories-header text-center">
                <span class="territories-subtitle">NOS TERRITOIRES</span>
                <h2 class="territories-title">Une présence locale, une exigence globale</h2>
            </div>

            <div class="territories-grid">
                <div class="territory-card glass-panel-dark">
                    <div class="territory-flag">🇬🇵</div>
                    <h3 class="territory-name">Guadeloupe</h3>
                    <div class="territory-sub">XIATEL GUADELOUPE</div>
                    <div class="territory-type glass-pill">Fibre & Sans fil</div>
                </div>

                <div class="territory-card glass-panel-dark">
                    <div class="territory-flag">🇲🇶</div>
                    <h3 class="territory-name">Martinique</h3>
                    <div class="territory-sub">XIATEL MARTINIQUE</div>
                    <div class="territory-type glass-pill">Fibre & Sans fil</div>
                </div>

                <div class="territory-card glass-panel-dark">
                    <div class="territory-flag">🇸🇽</div>
                    <h3 class="territory-name">Saint-Martin</h3>
                    <div class="territory-sub">XIATEL SAINT-MARTIN</div>
                    <div class="territory-type glass-pill">Fibre & Sans fil</div>
                </div>

                <div class="territory-card glass-panel-dark">
                    <div class="territory-flag">🇬🇫</div>
                    <h3 class="territory-name">Guyane</h3>
                    <div class="territory-sub">Prochainement</div>
                    <div class="territory-type glass-pill">Très haut débit</div>
                </div>

                <div class="territory-card glass-panel-dark">
                    <div class="territory-flag">🇫🇷</div>
                    <h3 class="territory-name">France</h3>
                    <div class="territory-sub">Métropolitaine</div>
                    <div class="territory-type glass-pill">Fibre</div>
                </div>
            </div>
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
            <div class="text-center mb-5">
                <h2 class="section-title">Nos Offres <span class="neon-text">Goxiwo</span></h2>
                <div class="engagement-toggle-container">
                    <div class="engagement-toggle">
                        <input type="radio" id="sans-engagement" name="engagement" value="sans" checked>
                        <label for="sans-engagement">Sans engagement</label>

                        <input type="radio" id="avec-engagement" name="engagement" value="avec">
                        <label for="avec-engagement">Avec engagement</label>

                        <div class="toggle-slider"></div>
                    </div>
                </div>
            </div>

            <div class="pricing-cards-grid">
                <!-- Card 1: Goxiwo -->
                <div class="pricing-card glass-panel-dark">
                    <div class="card-badge">LE PLUS CHOISI</div>
                    <div class="card-header">
                        <h3 class="card-brand">GOXIWO</h3>
                        <p class="card-subtitle">Internet illimité</p>
                        <p class="card-engagement-text">Sans engagement</p>
                        <div class="card-price">
                            <span class="price-value">39,99</span><span class="price-currency">€</span><span class="price-period">/mois</span>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <ul class="card-features">
                        <li><span class="check-icon">✓</span> Installation simple</li>
                        <li><span class="check-icon">✓</span> Internet stable</li>
                        <li><span class="check-icon">✓</span> <span class="feature-engagement-text">Sans engagement</span></li>
                    </ul>
                    <a href="#" class="btn-neon card-btn">Je m'abonne ×</a>
                </div>

                <!-- Card 2: Goxiwo MAXX -->
                <div class="pricing-card glass-panel-dark">
                    <div class="card-header">
                        <h3 class="card-brand">GOXIWO MAXX</h3>
                        <p class="card-subtitle">Ultra performance</p>
                        <p class="card-engagement-text">Pour les gros usages</p>
                        <div class="card-price">
                            <span class="price-value">49,99</span><span class="price-currency">€</span><span class="price-period">/mois</span>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <ul class="card-features">
                        <li><span class="check-icon">✓</span> Streaming + gaming</li>
                        <li><span class="check-icon">✓</span> Multi utilisateurs</li>
                        <li><span class="check-icon">✓</span> Performance maximale</li>
                    </ul>
                    <a href="#" class="btn-neon card-btn">Je choisis MAXX ×</a>
                </div>

                <!-- Card 3: Goxiwo Business -->
                <div class="pricing-card glass-panel-dark business-card">
                    <div class="card-header">
                        <h3 class="card-brand">GOXIWO BUSINESS</h3>
                        <p class="card-subtitle">Pour les pros exigeants</p>
                        <div class="card-price business-price">
                            <span class="price-value">Sur devis</span>
                        </div>
                    </div>
                    <div class="card-divider"></div>
                    <ul class="card-features">
                        <li><span class="check-icon">✓</span> Priorité réseau</li>
                        <li><span class="check-icon">✓</span> Support dédié</li>
                        <li><span class="check-icon">✓</span> Performance garantie</li>
                    </ul>
                    <a href="#" class="btn-neon card-btn">Je demande un devis</a>
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
