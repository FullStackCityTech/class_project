<?php

$request = $_SERVER['REQUEST_URI'];

//echo '<pre>'; print_r($_SERVER); echo '</pre>';
echo $request; 

$uri = explode('/', $request);
echo '<pre>'; print_r($uri); echo '</pre>';

$uri[3] = strtolower($uri[3]);

switch ($uri[3]) {
    case '':
    case 'home':
        require __DIR__ . '/home.php';
        break;
    case 'about':
        require __DIR__ . '/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}