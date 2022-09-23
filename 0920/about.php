<?php

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or print("Can't open file $myFile");

$string = "\n".date('h:i:s');
fwrite($fh, $string);

fclose($fh);
?>

<h1>About</h1>