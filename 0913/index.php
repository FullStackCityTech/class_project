<?php
include('menu.html');

if(  isset($_GET['goto'])  ) { //isset()
    switch( $_GET['goto'] ) {
        case 'page1':
            include('page1.php'); exit;
            break;
        case 'page2': 
            include('page2.php'); exit;
            break;
        case 'export':
            include('export_csv.php'); exit; 
            break; 
    }
}


?>

<h1>Home Page</h1>