<?php
$content = file_get_contents('xiwo-ai-theme/style.css');
// Clean up the malformed css at the end after regex replace
$bad_css = '}
    .offer-image {
        margin-top: 40px;
        justify-content: center;
    }
}';
$content = str_replace($bad_css, '', $content);
file_put_contents('xiwo-ai-theme/style.css', $content);
echo "Fixed css ending.\n";
?>
