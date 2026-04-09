<?php
// Mock WordPress functions
function get_header() { echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>Mock WP</title><link rel='stylesheet' href='xiwo-ai-theme/style.css'></head><body>"; }
function get_footer() { echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script><script src='xiwo-ai-theme/assets/js/main.js'></script></body></html>"; }
function get_template_directory_uri() { return 'xiwo-ai-theme'; }

// Render
ob_start();
include 'xiwo-ai-theme/front-page.php';
$html = ob_get_clean();
echo $html;
?>
