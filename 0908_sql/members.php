<?php
include('config.php');

session_start();
error_reporting(0);

if ($_SESSION) { //logged in
    print_r($_SESSION);
}


if ($_POST['logout']) {

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    echo " logged out "; 
    header("Location: ./?page=login"); //redirect
}

//UPDATE db & session
if($_POST['update']) {

    //check if both passwords match
    if($_POST['password'] == $_POST['password2']) {

        
        //update query UPDATE users SET (username='' ,password='') WHERE id=  $_SESSION['id']

        $encrypted_pw = hash('sha512', $_POST['password']); 

        $update = "UPDATE users SET username='".$_POST['username']."' , password='".$encrypted_pw."' WHERE id=".$_SESSION['id'];

        if(!$mysqli -> query($update)) {
            echo("Error description: " . $mysqli -> error);
        }

        echo " <br>".$update."<br>"; 

    }
    else {
        $message = ' passwords do not match';
    }
  


}
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
    <input type="text" name="username" placeholder="Username" class="field" value="<?php echo $_SESSION['username'] ?>" required> <br >
    <input type="password" name="password" placeholder="Password" class="field" required> <br />
    <input type="password" name="password2" placeholder="Repeat Password" class="field" required><br />
    <?php echo $message ?>   
     <br />      <input type="submit" value="Update" name="update">  
    </form>
<?php
    } //if
?>