<?php
session_start();
error_reporting(0);

if ($_SESSION) { //logged in
    print_r($_SESSION);
}


if ($_POST['logout']) {

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    echo " logged out ";
//    print_r($_SESSION);
    header("Location: login.php"); //redirect
}

?>

<style>

#logout {
    text-align: right;
    position: absolute;
    right: 0; top: 0;
}

</style>

<?php
    if($_SESSION) {
?>

    <div id="logout">
    <form method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>
    </div>

<?php
    } //if
?>