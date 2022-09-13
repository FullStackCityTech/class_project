<?php

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w'); //$fp = filestream //w = write | r = read

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp); //close stream


//$file = fopen('text.jpg', 'w');
//fclose($file);
 

?>