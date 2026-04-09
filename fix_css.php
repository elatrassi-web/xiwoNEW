<?php
$content = file_get_contents('xiwo-ai-theme/style.css');

$search = '.card-btn {
    width: 100%;
    text-align: center;
    padding: 15px;
    position: relative;
    z-index: 2;
}';

$replace = '.card-btn {
    width: 100%;
    text-align: center;
    padding: 15px;
    position: relative;
    z-index: 2;
    background: linear-gradient(135deg, rgba(154,186,100,0.8) 0%, rgba(100,140,50,0.9) 100%);
    color: #000;
    font-weight: 700;
    border: none;
    border-radius: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 5px 15px rgba(154,186,100,0.3);
    transition: all 0.3s ease;
}

.card-btn:hover {
    background: linear-gradient(135deg, rgba(154,186,100,1) 0%, rgba(100,140,50,1) 100%);
    box-shadow: 0 8px 20px rgba(154,186,100,0.5);
    transform: translateY(-2px);
    color: #000;
}';

$content = str_replace($search, $replace, $content);

// Also let's fix the green color. The button background in .btn-neon and .card-btn shouldn't have the black text on the current generic style, let's just make it look closer to the image
$content = str_replace('background: var(--color-neon-green);', 'background: linear-gradient(135deg, #9ABA64 0%, #7A9A44 100%);', $content);

file_put_contents('xiwo-ai-theme/style.css', $content);
echo "Fixed CSS buttons.\n";
?>
