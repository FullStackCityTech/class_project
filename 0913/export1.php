<?php
//host, username, password, database name
$host = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dbz_names";

$mysqli = new mysqli( $host, $username, $password, $dbname ); 


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
    echo "connect successful";
}

$query = "SELECT * FROM origins ORDER BY id";
 
if(!$mysqli -> query($query)) {
    echo("Error description: " . $mysqli -> error);

//    echo " <br>".$insert."<br>"; 
}
else {
    $ss = fopen('dbz.csv', 'w');//

    $columns = array(	
        'id',	
        'db_name',
        'origin',	
        'meaning',	
        'date_created',	
        'time_created',	
        'date_and_time',
    );
    fputcsv($ss, $columns, ','); 

    $result = $mysqli -> query($query); 

    while($row = $result -> fetch_assoc()) { 

        foreach($row as $key => $val) {
            if($val == NULL) {
                $row[$key] = '--';
            }
        }
       
        fputcsv($ss, $row, ',');
    }

    fclose($ss);
}


?>