<?php
include('config.php');

session_start();
error_reporting(0);

if($_SESSION['level'] != 'A') {
   // echo " You shouldn't be here ";
    die(" You shouldn't be here ");
   // exit;
}
else {
    echo "You're an admin ";
}


//DELETE FROM users WHERE id=......
if($_POST['delete']) {

    if(!$mysqli->query( "DELETE FROM users WHERE id=".$_POST['id'] )) {
        echo("Error description: " . $mysqli -> error);
    }
    else {
        $message = ' successfully deleted id#'.$_POST['id'];
    }
}



echo $message;
?>

<form method="POST">

    <input type="text" name="id">
    <input type="submit" value="Delete" name="delete" onclick="confirm('Are you sure you want to delete this user?')" >
</form>