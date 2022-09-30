<?php

$conn = mysqli_connect("localhost:3307","root","","dbz_names");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else {
  echo 1;
}

// Perform query
if ($result = $conn -> query("SELECT * FROM origins")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$conn -> close();
?>