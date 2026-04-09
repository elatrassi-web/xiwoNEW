<?php
$content = file_get_contents('xiwo-ai-theme/style.css');

$search = '.card-btn {
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
}';

$replace = '.card-btn {
    display: inline-block;
    width: 100%;
    text-align: center;
    padding: 15px;
    position: relative;
    z-index: 2;
    background: linear-gradient(180deg, #b2db2a 0%, #76ad1a 100%);
    color: #fff;
    font-size: 1.1rem;
    font-weight: 700;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 12px;
    box-shadow: inset 0 2px 5px rgba(255,255,255,0.3), 0 5px 15px rgba(154,186,100,0.3);
    transition: all 0.3s ease;
}';

$search2 = '.card-btn:hover {
    background: linear-gradient(135deg, rgba(154,186,100,1) 0%, rgba(100,140,50,1) 100%);
    box-shadow: 0 8px 20px rgba(154,186,100,0.5);
    transform: translateY(-2px);
    color: #000;
}';

$replace2 = '.card-btn:hover {
    background: linear-gradient(180deg, #c3f22b 0%, #8ac71f 100%);
    box-shadow: inset 0 2px 5px rgba(255,255,255,0.4), 0 8px 20px rgba(154,186,100,0.5);
    transform: translateY(-2px);
    color: #fff;
}';

$content = str_replace($search, $replace, $content);
$content = str_replace($search2, $replace2, $content);

file_put_contents('xiwo-ai-theme/style.css', $content);
echo "Fixed CSS buttons to match exactly the gradient in the image.\n";
?>
