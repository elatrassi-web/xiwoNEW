<?php
$content = file_get_contents('xiwo-ai-theme/front-page.php');

$search = '    <!-- OFFER SECTION -->
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

                    <a href="#" class="btn-neon">Je m\'abonne</a>
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
    </section>';

$replace = '    <!-- OFFER SECTION -->
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
                    <a href="#" class="btn-neon card-btn">Je m\'abonne ×</a>
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
    </section>';

if (strpos($content, $search) !== false) {
    $content = str_replace($search, $replace, $content);
    file_put_contents('xiwo-ai-theme/front-page.php', $content);
    echo "Successfully replaced content in front-page.php\n";
} else {
    echo "Could not find the target string in front-page.php\n";
}
?>
