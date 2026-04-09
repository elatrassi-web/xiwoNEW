const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

(async () => {
    const browser = await chromium.launch();
    const page = await browser.newPage({ viewport: { width: 1280, height: 800 } });

    // Create an index.html that includes the css and the territories html to test it

    // Read the CSS
    const css = fs.readFileSync('xiwo-ai-theme/style.css', 'utf8');

    // Read the front-page.php and extract just the territories section
    const php = fs.readFileSync('xiwo-ai-theme/front-page.php', 'utf8');
    const start = php.indexOf('<section class="territories-section');
    const end = php.indexOf('</section>', start) + 10;
    const territoriesHtml = php.substring(start, end);

    const html = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
        :root {
            --color-bg: #0b0c10;
            --color-surface: #1f2833;
            --color-neon-green: #66fcf1;
            --color-neon-cyan: #45a29e;
            --color-text-main: #c5c6c7;
            --color-text-muted: #8b8e94;
            --font-main: 'Rajdhani', sans-serif;
            --font-secondary: 'Inter', sans-serif;
            --glass-bg: rgba(31, 40, 51, 0.4);
            --glass-border: rgba(102, 252, 241, 0.2);
            --glass-blur: blur(10px);
        }
        ${css}
        </style>
        <style>
            body { background: #0b0c10; color: white; margin: 0; padding: 2rem; font-family: sans-serif; }
            .container { max-width: 1200px; margin: 0 auto; width: 100%; display: block; }
        </style>
    </head>
    <body>
        ${territoriesHtml}
    </body>
    </html>
    `;

    fs.writeFileSync('test_territories.html', html);

    await page.goto(`file://${path.resolve('test_territories.html')}`);

    // Take a screenshot of the whole page
    await page.screenshot({ path: 'territories_final_test.png', fullPage: true });
    console.log("Screenshot saved as territories_final_test.png");

    await browser.close();
})();
