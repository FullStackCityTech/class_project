<?php

$host = 'localhost:3307';
$username = 'root';
$password = '';
$server = 'survey';

$mysqli = new mysqli($host, $username, $password, $server);


$queryS = "SELECT * FROM `survey` WHERE 1 ORDER BY user_id";

   $result = $mysqli->query($queryS); 

   if(!$result) {
    echo "Error: ".$mysqli->error;
   }

   while( $row = $result->fetch_assoc() ) {
    //    echo '<pre>'; print_r($row); echo '</pre>';
 
       $jsonDecode = json_decode( $row['answer'] );
       echo '<pre>'; print_r($jsonDecode); echo '</pre>';

       if($row['user_id'] == 0) {
            $userObject = $jsonDecode;
       }
   }

   echo '<br>'. print_r($userObject->goal).'<br>';


?>