<?php
session_start(); 

 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

$_SESSION['cart_item3'] = 'more stuff';
$_SESSION['cart_item4'] = 'even more stuff';


?>

<a href="session2.php">view cart</a>