<?php
session_start(); 

 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';


$string = 'hey, hello world, the fox jumps, over ,the, lazy dog ';
$array = explode(',', $string); //explode gives an array

echo '<pre>';
print_r($array);
echo '</pre>';


$string = 'hey hello world the fox jumps over the lazy dog.';
$array = explode(' ', $string); //explode gives an array

echo '<pre>';
print_r($array);
echo '</pre>';


/*
0-255
xx.xx.xx.xxx
*/

//$ipAddress = '234.50.50.70';
$ipAddress = $_GET['ipAddress'];
$numbers = explode('.', $ipAddress);

echo '<pre>';
print_r($numbers);
echo '</pre>';

//echo sizeof($numbers);

if(sizeof($numbers) != 4) {
    echo "not a valid ip address";
}
else { //size == 4
    for($c = 0; $c < 4; $c++) {

        if($numbers[$c] >= 0 && $numbers[$c] <= 255 ) {
            echo " valid #";
        }
        else {
            echo "not a valid ip address"; 
            break;
        }
    }

$quote = "my momma always said life was like a box of chocolates, you'll never know what you're gonna get";


echo '<pre>'; print_r(explode(' ', $quote)); echo '</pre>';

echo '<pre>'; print_r(explode(',', $quote)); echo '</pre>';

echo '<pre>'; print_r(explode('like', $quote)); echo '</pre>';

}


?>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<a href="session2.php">view cart</a>