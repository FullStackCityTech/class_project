<?php
$row = 1;
//fgetcsv($handle, 1000, ",")  // "7"===7

if (($handle = fopen("file.csv", "r")) !== FALSE) { 

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $num = count($data); 

        echo "<p> $num columns in line $row: <br /></p>\n";
        $row++;
        
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>