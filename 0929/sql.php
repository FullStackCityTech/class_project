<?php
set_time_limit(60);

$host = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'alot';

$mysqli = new mysqli($host, $username, $password, $dbname);

$x = 0;
while(true){
    
    $query = "INSERT INTO `alot`(`anything`) VALUES ('10')";


    $result = $mysqli->query($query); 

    if(!$result) {
        echo "Error: ".$mysqli->error;
    } else {
        echo "inserted- ";
    }
    $x++;
}

?>