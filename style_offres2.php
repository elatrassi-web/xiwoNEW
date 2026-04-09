<?php
$content = file_get_contents('xiwo-ai-theme/style.css');

$search = '/* Dynamic Offer Section */
.dynamic-offer-section {
    padding: 80px 0;
}

.offer-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px;
    background: radial-gradient(circle at 70% 50%, rgba(154, 186, 100, 0.05) 0%, rgba(255,255,255,0.02) 100%);
    border: 1px solid rgba(255,255,255,0.05);
}

.offer-content {
    flex: 1;
}

.offer-brand {
    color: var(--color-neon-green);
    font-weight: 700;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.offer-title {
    font-size: 2.5rem;
    margin-bottom: 20px;
    line-height: 1.2;
}

.offer-price-display {
    margin: 30px 0;
    display: flex;
    align-items: baseline;
}

.price-value {
    font-size: 4rem;
    font-weight: 700;
    line-height: 1;
}

.price-currency {
    font-size: 2rem;
    font-weight: 700;
    margin-left: 5px;
}

.price-period {
    color: #888;
    margin-left: 10px;
}

.offer-note {
    margin-top: 15px;
    color: #888;
    font-size: 0.9rem;
}

.offer-image {
    flex: 1;
    display: flex;
    justify-content: flex-end;
}

.router-mockup {
    position: relative;
    max-width: 400px;
}

.router-img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    position: relative;
    z-index: 2;
}

.router-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120%;
    height: 120%;
    background: radial-gradient(circle, rgba(154,186,100,0.2) 0%, transparent 70%);
    z-index: 1;
    filter: blur(20px);
}

.router-branding {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 3;
    color: var(--color-neon-green);
    font-weight: 700;
    letter-spacing: 2px;
    text-shadow: 0 0 10px var(--color-neon-green);
}

@media (max-width: 992px) {
    .offer-container {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
    }

    .offer-price-display {
        justify-content: center;
    }

    .offer-image {
        margin-top: 40px;
        justify-content: center;
    }
}';

// Ensure the search string exactly matches what is in style.css
// The easiest way is to use regex or substr replace if needed, but let's try a regex replace to ignore minor whitespace issues

$replace = '/* -------------------------------------
 * Pricing / Offres Section
 * ------------------------------------- */
.dynamic-offer-section {
    padding: 100px 0;
}

.engagement-toggle-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.engagement-toggle {
    position: relative;
    display: inline-flex;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50px;
    padding: 5px;
    overflow: hidden;
}

.engagement-toggle input[type="radio"] {
    display: none;
}

.engagement-toggle label {
    position: relative;
    z-index: 2;
    padding: 12px 30px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    transition: color 0.3s ease;
    user-select: none;
}

.toggle-slider {
    position: absolute;
    top: 5px;
    bottom: 5px;
    left: 5px;
    width: calc(50% - 5px);
    background: var(--color-neon-green);
    border-radius: 50px;
    z-index: 1;
    transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 0 15px rgba(154, 186, 100, 0.4);
}

.engagement-toggle input#sans-engagement:checked ~ .toggle-slider {
    transform: translateX(0);
}

.engagement-toggle input#avec-engagement:checked ~ .toggle-slider {
    transform: translateX(100%);
}

.engagement-toggle input#sans-engagement:checked + label,
.engagement-toggle input#avec-engagement:checked + label {
    color: var(--color-bg);
}

.pricing-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 50px;
}

.pricing-card {
    position: relative;
    padding: 40px 30px;
    display: flex;
    flex-direction: column;
    border-radius: 15px;
    background: linear-gradient(180deg, rgba(20,20,20,0.9) 0%, rgba(10,10,10,0.95) 100%);
    border: 1px solid rgba(255, 255, 255, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.pricing-card::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 100%;
    background: radial-gradient(circle at 50% 0%, rgba(154, 186, 100, 0.15) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.pricing-card:hover {
    transform: translateY(-10px);
    border-color: rgba(154, 186, 100, 0.3);
    box-shadow: 0 10px 40px rgba(154, 186, 100, 0.1);
}

.pricing-card:hover::before {
    opacity: 1;
}

/* Badge for first card */
.card-badge {
    position: absolute;
    top: -1px;
    right: 20px;
    background: #FFD700;
    color: #000;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 8px 15px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    letter-spacing: 1px;
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.2);
    z-index: 2;
}

.card-header {
    text-align: center;
    position: relative;
    z-index: 2;
}

.card-brand {
    font-family: var(--font-heading);
    color: var(--color-neon-green);
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.card-subtitle {
    font-size: 1.4rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 5px;
}

.card-engagement-text {
    font-size: 1rem;
    color: #aaa;
    margin-bottom: 20px;
    min-height: 24px;
}

.card-price {
    display: flex;
    justify-content: center;
    align-items: baseline;
    margin-bottom: 20px;
}

.card-price .price-value {
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--color-neon-green);
    line-height: 1;
}

.card-price .price-currency {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--color-neon-green);
    margin-left: 2px;
}

.card-price .price-period {
    font-size: 1rem;
    color: #888;
    margin-left: 5px;
}

.business-price .price-value {
    font-size: 2.5rem;
    color: #fff;
}

.card-divider {
    height: 1px;
    width: 100%;
    background: linear-gradient(90deg, transparent 0%, rgba(154,186,100,0.5) 50%, transparent 100%);
    margin: 20px 0;
    position: relative;
    z-index: 2;
}

.card-features {
    list-style: none;
    padding: 0;
    margin: 0 0 40px 0;
    flex-grow: 1;
    position: relative;
    z-index: 2;
}

.card-features li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-size: 1.1rem;
    color: #ddd;
}

.card-features .check-icon {
    color: var(--color-neon-green);
    margin-right: 15px;
    font-weight: bold;
}

.card-btn {
    width: 100%;
    text-align: center;
    padding: 15px;
    position: relative;
    z-index: 2;
}

@media (max-width: 992px) {
    .pricing-cards-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
}';

// Using regular expression to safely remove old styles and append new ones
$pattern = '/\/\* Dynamic Offer Section \*\/(.*?)@media \(max-width: 992px\) \{.*?\}/s';

if (preg_match($pattern, $content)) {
    $content = preg_replace($pattern, $replace, $content);
    file_put_contents('xiwo-ai-theme/style.css', $content);
    echo "Successfully replaced content using regex in style.css\n";
} else {
    echo "Regex pattern failed to match.\n";
    // Let's just find the start of the block and truncate/append
    $pos = strpos($content, '/* Dynamic Offer Section */');
    if ($pos !== false) {
        $content = substr($content, 0, $pos) . $replace . "\n\n/* Final CTA Section */\n.final-cta-section {\n    padding: 100px 0;\n    background: radial-gradient(circle at 50% 50%, rgba(154, 186, 100, 0.1) 0%, var(--color-bg) 70%);\n}\n\n.cta-title {\n    font-size: 3rem;\n    margin-bottom: 20px;\n}\n\n.cta-subtitle {\n    font-size: 1.5rem;\n    color: var(--color-text-muted);\n    margin-bottom: 40px;\n}\n";
        file_put_contents('xiwo-ai-theme/style.css', $content);
        echo "Successfully truncated and appended styles.\n";
    }
}

?>
