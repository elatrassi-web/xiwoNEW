<?php
$content = file_get_contents('xiwo-ai-theme/style.css');

$search = '@media (max-width: 992px) {
    .pricing-cards-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

@media (max-width: 768px) {';

$replace = '@media (max-width: 992px) {
    .pricing-cards-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
}

@media (max-width: 768px) {';

$content = str_replace($search, $replace, $content);
file_put_contents('xiwo-ai-theme/style.css', $content);
echo "Fixed CSS brace.\n";
?>
