<?php
include('config.php');

session_start();
error_reporting(0);
 


if($_POST['login']) {
    //echo $_POST['username'].' '.$_POST['password'];

    $getUsers = "SELECT * FROM users ORDER BY username";
    $result = $mysqli -> query($getUsers);
  
    while ($row = $result -> fetch_assoc()) {
      //echo " ".$row['username']." ".$row['password']."<br> ";

        //match username & password - add to php session
        if($_POST['username'] == $row['username'] && $_POST['password'] == $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
    
            header("Location: members.php"); //redirect
        } 
        else {
            $message = " wrong username or password";
        }

    }
   
}




if ($_SESSION) { //logged in
    print_r($_SESSION);
}

?>
<style>
#form {
    text-align: center;
    border: 1px solid black; 
    width: 40%;
    margin: auto;
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

#message {
    color: red;
    text-transform: UPPERCASE;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 20px;
}
 

</style>



<div id="form">
<form method="POST">
    <span id="message"><?php echo $message ?></span> <br>
    <input type="text" name="username" placeholder="Username" class="field"> <br>
    <input type="password" name="password" placeholder="Password" class="field"> <br />
    <input type="submit" value="Login" name="login">  
</form>
</div>