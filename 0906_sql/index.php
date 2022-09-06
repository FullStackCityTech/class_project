<?php
include("config.php");

$mysqli = new mysqli($host, $username, $password, $dbname);
//connection object

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
    echo "connect successful";
}



// Perform query
if ($result = $mysqli -> query("SELECT...")) {
    echo " Returned rows are: " . $result -> num_rows." ";
   
    // Free result set
    //$result -> free_result();
}


// Perform a query, check for error
if (!$mysqli -> query("UPDATE origins SET meaning='vegetables' WHERE id = 4")) {
    echo("Error description: " . $mysqli -> error);
}



  

$mysqli -> close();
?>