<?php
//host, username, password, database name
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "login";

$db = new mysqli($host, $username, $password, $dbname);

if($db->connect_errno){
    echo " ".$db->connect_errno.": ".$db->connect_error;
}
else {
    echo '<pre>'; print_r($db); echo '</pre>';
}

$file = fopen("users.csv", "r"); //r = read w = write

while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {

    $num = count($data); 

    echo "<p> columns in line: ";
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . " ";
    }
    echo "</p>";

  //  echo "INSERT INTO new_users ('username', 'password', 'state') VALUES (
//        '$data[0]', '$data[1]', '$data[2]'
   // ) ";

    echo $query = "INSERT INTO `new_users`(`username`, `password`, `state`) VALUES (
       '$data[0]', '$data[1]', '$data[2]'
        )";

    print "<br>";
    
    if(!$db -> query($query)) {
        echo("Error description: " . $db -> error);
    }
}

fclose($file);
//read csv - insert the mysql table


?>