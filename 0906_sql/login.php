<?php
session_start();
error_reporting(0);

header("Location: members.php");

$username = 'username';
$password = 'password1';

if($_POST['login']) {
    echo $_POST['username'].' '.$_POST['password'];

        //match username & password - add to php session
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        echo " logged in ";

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }
    else {
        echo " wrong username or password";
    }
}
else if ($_POST['logout']) {

    unset($_SESSION);
    echo " logged out ";
}



if ($_SESSION) { //logged in
    echo " session started ";
}


?>
<style>
#form {
    text-align: center;
}

.field {
    width: 300px;
    height: 40px;
}

.field:hover {
    background-color:rgb(217, 245, 188);
}

input[type="submit"] {
    border: 1px solid black;
    height: 40px; 
    width: 100px;
    font-size: 18px;
}

input[type="submit"]:hover {
    cursor: pointer;
    background-color: #afa9a9;
    color: white;
}

#logout {
    text-align: right;
    position: absolute;
    right: 0; top: 0;
}

</style>

<div id="logout">
<form method="POST">
    <input type="submit" name="logout" value="Logout">
</form>
</div>

<div id="form">
<form method="POST">
    <input type="text" name="username" placeholder="Username" class="field"> <br>
    <input type="password" name="password" placeholder="Password" class="field"> <br />
    <input type="submit" value="Login" name="login">  
</form>
</div>