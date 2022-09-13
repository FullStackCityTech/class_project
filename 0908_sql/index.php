<?php
//benjamin 0000 | user3 bbbbbb
//main menu - switch login/logout button
//update redir for banned members 


if( isset($_GET['page'])) {

    switch($_GET['page']){
        case 'register':
            include('register.php');
            break;
        
        case 'members':
            include('members.php');
            break;

        default:
            include('login.php');
    }
}
else {
    include('login.php');
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
        <li> <a href="./?page=login">Login</a></li>
        <li> <a href="./?page=register">Register</a></li>
        <li> <a href="./?page=members">Members</a></li>
    </ul>
</div>
