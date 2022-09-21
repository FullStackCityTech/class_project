<?php
$request = $_SERVER['REQUEST_URI'];

//echo '<pre>'; print_r($_SERVER); echo '</pre>';
//echo $request; 

$uri = explode('/', $request);
//echo '<pre>'; print_r($uri); echo '</pre>';

$uri[3] = strtolower($uri[3]);

switch ($uri[3]) {
    case '':
    case 'image':
    case 'upload':
        require __DIR__ . '/image_upload.php';
        break;
    case 'class_car':
        require __DIR__ . '/class_car.php';
        break;
    case 'class_cat':
        require __DIR__ . '/class_cat.php';
        break;
    case 'import':
        require __DIR__ . '/import.php';
        break;
    default:
        http_response_code(404);
        require '../0920/404.php';
        break;
}