<?php
include('menu.php');

if($_GET['name']) {
    //echo $_GET['name'];

    // array_push($_SESSION, $_GET['name']);
    $r = rand();
    
    $_SESSION['name'.$r] = $_GET['name'];
}

if($_GET['delete']) {

    $keyToDelete = array_search($_GET['delete'], $_SESSION); //returns key

    if(!$keyToDelete) {
        echo "<br>nothing to delete<br>";
    }

    unset( $_SESSION[ $keyToDelete ] );
}


echo '<pre>'; print_r($_SESSION); echo '</pre>';

?>

 <a href="cart.php?delete=plate"><button>Remove plate</button></a>
 <a href="cart.php?delete=hamburger"><button>Remove hamburger</button></a>
 <a href="cart.php?delete=cheeseburger"><button>Remove cheeseburger</button></a>


<?php
include('footer.html');

?>