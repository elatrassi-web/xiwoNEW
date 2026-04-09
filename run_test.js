const { chromium } = require('playwright');

(async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage();

  // Desktop
  await page.setViewportSize({ width: 1280, height: 800 });
  await page.goto('http://localhost:8000/test_render.php');
  await page.waitForTimeout(1000); // Wait for fonts/js

  // Navigate to #offres to capture the specific section
  const section = await page.$('#offres');
  await section.screenshot({ path: 'screenshot_desktop.png' });
  console.log("Screenshot desktop taken");

  // Toggle "Avec engagement"
  await page.click('label[for="avec-engagement"]');
  await page.waitForTimeout(500); // Wait for GSAP animation
  await section.screenshot({ path: 'screenshot_desktop_toggled.png' });
  console.log("Screenshot toggled taken");

  // Mobile
  await page.setViewportSize({ width: 375, height: 812 });
  await page.goto('http://localhost:8000/test_render.php');
  await page.waitForTimeout(1000); // Wait for fonts/js
  const sectionMobile = await page.$('#offres');
  await sectionMobile.screenshot({ path: 'screenshot_mobile.png' });
  console.log("Screenshot mobile taken");

  await browser.close();
})();
