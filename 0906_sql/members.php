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

//UPDATE db & session

?>

<style>

#logout {
    text-align: left;
    position: absolute;
    left: 0; top: 0;
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

    <h1>Welcome, <?php echo $_SESSION['username'] ?></h1>

    <form method="POST">
    <input type="text" name="username" placeholder="Username" class="field"> <br>
    <input type="password" name="password" placeholder="Password" class="field"> <br />
    <input type="password" name="password2" placeholder="Repeat Password" class="field">
     <br />      <input type="submit" value="Update" name="update">  
    </form>
<?php
    } //if
?>