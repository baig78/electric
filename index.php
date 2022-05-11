

<?php

$request = $_SERVER['REQUEST_URI'];
// $request=str_replace("/electric","",$request);

switch ($request) {

    case '':
    case '/':
        require  'home.php';
        break;
    case '/about':
        require  'about.php';
        break;

    case '/service':
        require  'service.php';
        break;

    case '/contact':
        require  'contact.php';
        break;

    case '/home':
        require  'home.php';
        break;

        case '/product':
            require  'product.php';
            break;

    default:
        http_response_code(404);
        require 'home.php';
        break;
}









// $request = $_SERVER['REQUEST_URI'];

// switch ($request) {

//     case '':
//     case '/electric/':
//         require  'home.php';
//         break;
//     case '/electric/about':
//         require  'about.php';
//         break;

//     case '/electric/service':
//         require  'service.php';
//         break;

//     case '/electric/contact':
//         require  'contact.php';
//         break;


//     case '/electric/product':
//         require  'product.php';
//         break;

//     case '/electric/home':
//         require  'home.php';
//         break;

//     case '/electric/form':
//         require  'form.php';
//         break;

//     default:
//         http_response_code(404);
//         require 'home.php';
//         break;
// }

?> 