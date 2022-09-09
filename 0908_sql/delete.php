<?php
include('config.php');

session_start();
error_reporting(0);


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