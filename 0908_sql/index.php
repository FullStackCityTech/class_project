<?php

session_start();
error_reporting(0);

echo "before unset"; 
print_r($_SESSION);
 
//benjamin 0000 | user3 bbbbbb

if( isset($_GET['page'])) {

    switch($_GET['page']){
        case 'register':
            include('register.php');
            break;
        
        case 'members':
            //print_r($_SESSION);  
            include('members.php');
            break;

        case 'logout': 
            session_destroy();
            
            //unset($_SESSION);
            /*
            foreach($_SESSION as $key => $v){
                //echo $_SESSION[$key].' ';
                unset($_SESSION[$key]);
            }
*/
            
//echo "after unset"; 
            print_r($_SESSION);

  
        default:
            include('login.php');
    }
}
else {
    include('login.php');
}

if( isset($_SESSION) ) {
    $logInOrOut = '<a href="./?page=logout">Logout</a>';
}
else {
    $logInOrOut = '<a href="./?page=login">Login</a>';
}


?>
<style>

#menu {
    text-align: left;
    position: absolute;
    top: 0; right: 0;
}

#menu ul {
    display: inline;
}

#menu ul li {
    list-style-type: none;
    display: inline-block;
    padding: 15px;
    margin: 0;
    background-color: #EEEEEE;
}

#menu a {
    text-decoration: none;
    font-size: 16px;
}

</style>

<div id="menu">
    <ul>
        <li> <?php echo $logInOrOut ?></li>

        <li> <a href="./?page=register">Register</a></li>
        <li> <a href="./?page=members">Members</a></li>
    </ul>
</div>
