<?php
include('menu.php');

//session_start();
$movies = array( 
    //key => value
    "movie1" => "Top Gun",
    
    "movie2" => "50 Shades of Grey", 
    
   "movie3" => "50 Shades Darker"
); 


// echo array_search("50 Shades of Greyhhhhhhhhhhhhhhhhhhhhhhhhhh", $movies);

// echo array_key_exists("movie3", $movies); //1 = true  empty= false


$key_to_search = "movie1";

if(array_key_exists($key_to_search, $movies)) {
    echo $key_to_search.' exists';
}
else {
    echo $key_to_search.' does not exist';

}

?>
<br><br>
<a href="cart.php?name=plate">Add to Cart</a>


<?php
include('footer.html');

?>