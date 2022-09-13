<?php
include('config.php');

session_start();
error_reporting(0);


if($_GET['banned'] == 1) {
    die(" You are banned "); 
}


//insert 
if($_POST['insert']) {

    //check for taken username
    $checkUsername = "SELECT * FROM `users` WHERE username = '".$_POST['username']."'";

    // Perform query
    if ($result = $mysqli -> query($checkUsername)) {
        echo " Returned rows are: " . $result -> num_rows." ";

        if($result -> num_rows > 0) {
            $message = ' username taken '; 
        }
        else { //if username is ok

            if($_POST['password'] != $_POST['password2']) {
                $message2 = ' passwords do not match ';
            }
            else { //passwords match

                //encrypt pw
                $encrypted_pw = hash('sha512', $_POST['password']);

                $insert = "INSERT INTO users (username, password) VALUES (  '".$_POST['username']."', '".$encrypted_pw."'  )  ";
    
                if(!$mysqli -> query($insert)) {
                    echo("Error description: " . $mysqli -> error);
            
                    echo " <br>".$insert."<br>"; 
                }
                else {
                    $_SESSION['username'] = $_POST['username']; 
                    $_SESSION['password'] = $encrypted_pw; 
                    $_SESSION['id'] = $mysqli -> insert_id; //insert_id is the id of auto_increment field
                  
            
                    header("Location: members.php"); 
                } 
            } //passwords match        
        } //if username is ok
    }
}

echo " this is a quote \"from the womb to the tomb\" ";
echo 'jjj "ppp" orandel\'s orange ';

?>

<h1>Register Here</h1>
<form method="POST">
    <input type="text" name="username" placeholder="Username" class="field" required>  <?php echo $message ?>   <br >
    <input type="password" name="password" placeholder="Password" class="field" required> 
    <?php echo $message2 ?> 
    <br />
    <input type="password" name="password2" placeholder="Repeat Password" class="field" required><br />
   
        <br />      
    <input type="submit" value="Register" name="insert">  
</form>