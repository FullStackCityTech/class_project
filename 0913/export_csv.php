<?php
//host, username, password, database name
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "login";

$mysqli = new mysqli( $host, $username, $password, $dbname ); 



// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
    echo "connect successful";
}

$query = "SELECT * FROM users ORDER BY id";
 
if(!$mysqli -> query($query)) {
    echo("Error description: " . $mysqli -> error);

//    echo " <br>".$insert."<br>"; 
}
else {
    $ss = fopen('users.csv', 'w');//

    $result = $mysqli -> query($query); 

    while($row = $result -> fetch_assoc()){

        $password = substr($row['password'], 0, 40)."...";
        echo $row['id']. " ".$row['level']." ".$row['username']." ".$password."<br>";

        $order = array(
            'id' => $row['id'],
            'level' => $row['level'],
            'username' => $row['username'],
            'password' => $password
        );

        fputcsv($ss, $order, ',');
    }

    fclose($ss);
}


/*
$string = "01234567890123456789012345678901234567890123456789";
$string = substr($string,5,35);

echo $string;

select all posts order by date 
*/
?>