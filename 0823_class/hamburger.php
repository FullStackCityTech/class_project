<?php
include('menu.php'); //require 


// echo date("h:i:s a");

$string = "..'''''";

$movies = array(
    0 => "anything"
); 

if($movies) {
    echo "true";
}
else {
    echo "false";
}

$sentence = "Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.";

echo "<br><br>";
echo strpos( $sentence, "," );

$search = "fffffgggggkkkk ooooppppttttyyyyyggeeee";

echo "<br><br>";
echo $search; 
echo "<br><br>";
echo strpos( $search, "g" );

echo "<br><br>";
$search = str_replace("f", "1", $search);

$search = str_replace("g", "2", $search);


$search = str_replace("oo", "3", $search);


$search = str_replace(" ", "-", $search);

$search = str_replace("eeee", "4", $search);

echo $search; 


?>
<br><br>
<a href="cart.php?name=hamburger">Add to Cart</a>

<?php
include('footer.html');

?>