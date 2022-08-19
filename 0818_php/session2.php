<?php
session_start(); 


//unset($_SESSION); 

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


echo 'your ip address: '.$_SERVER['REMOTE_ADDR'].'';

?>

<a href="session1.php">go back</a>