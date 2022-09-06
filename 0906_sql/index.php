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


$sql = "SELECT * FROM origins LIMIT 5";
$result = $mysqli -> query($sql);

echo "<table border='2'>";
//fetch associate array = key value
while($rec = $result -> fetch_assoc()) {
    echo " <tr><td>".$rec["db_name"]."</td>
    <td>".$rec['origin']."</td>
    <td> ".$rec['meaning']."</td>
    <td> ".$rec['date_created']."</td></tr>";
} 
echo "</table>";

// Free result set
// $result -> free_result();


$query = "SELECT * FROM origins ORDER BY db_name DESC LIMIT 5";
$res = $mysqli -> query($query); 

echo "<table border='2'>";
//fetch associate array = key value
while($rec = $res -> fetch_assoc()) {
    echo " <tr>
    <td>".$rec["id"]."</td>
    <td>".$rec["db_name"]."</td>
    <td>".$rec['origin']."</td>
    <td> ".$rec['meaning']."</td>
    <td> ".$rec['date_created']."</td></tr>";
} 
echo "</table>";



  

$mysqli -> close();
?>