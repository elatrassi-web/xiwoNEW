<?php
$content = file_get_contents('xiwo-ai-theme/assets/js/main.js');

// Remove the previously appended code because it's outside the DOMContentLoaded event listener
$content = preg_replace('/\/\/ Engagement Toggle Logic.*/s', '', $content);

// Now insert it correctly inside DOMContentLoaded
$insert_code = '
    // Engagement Toggle Logic
    const toggleRadios = document.querySelectorAll(\'input[name="engagement"]\');
    const engagementTexts = document.querySelectorAll(\'.card-engagement-text, .feature-engagement-text\');

    if (toggleRadios.length > 0 && engagementTexts.length > 0) {
        toggleRadios.forEach(radio => {
            radio.addEventListener(\'change\', (e) => {
                const isEngaged = e.target.value === \'avec\';
                const newText = isEngaged ? \'Avec engagement\' : \'Sans engagement\';

                // Animate text change
                if (typeof gsap !== \'undefined\') {
                    gsap.to(engagementTexts, {
                        opacity: 0,
                        duration: 0.2,
                        onComplete: () => {
                            engagementTexts.forEach(el => {
                                // Only change text if it currently says "Sans engagement" or "Avec engagement"
                                if (el.textContent.includes(\'engagement\')) {
                                     el.textContent = newText;
                                }
                            });
                            gsap.to(engagementTexts, { opacity: 1, duration: 0.2 });
                        }
                    });
                } else {
                    engagementTexts.forEach(el => {
                        if (el.textContent.includes(\'engagement\')) {
                             el.textContent = newText;
                        }
                    });
                }
            });
        });
    }
});'; // Replacing the closing }); of DOMContentLoaded

$content = preg_replace('/\}\);[\s]*$/s', $insert_code, $content);
file_put_contents('xiwo-ai-theme/assets/js/main.js', $content);
echo "Fixed JS.\n";
?>
