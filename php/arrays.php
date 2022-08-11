<?php

$name = array(
    'america/ny', 'america/central', 'america/los_angeles', 'hawaii'
);

print_r($name); 
echo '<br>';

echo '<br>'.sizeof($name);

for($a = 0; $a < sizeof($name) ; $a++) {
    echo '<br>'.$name[$a].' ';
}

$timezone = array(
    0 => 'america/ny', 
    1 => 'america/central',
    2 => 'america/los_angeles',
    3 => 'hawaii',
    4 => 'hong kong'
);

//$timezone[3] = hawaii   $timezone[1] 

echo '<br>'; echo sizeof($timezone);
echo '<br>';

print_r($timezone); 

echo '<br>';echo '<br>';


$hashmap = array( //hashmap
    'eastern' => 'NY', //key-value pair
    'central' => 'chicago', //k v 
    'mountain' => 'nebraska',  
    'pacific' => 'los angeles',
    'hk' => 5,
    10 => 5,
);

echo $hashmap[10]; //chicago


echo '<br>'.rand(); 

echo '<br>'.rand() % 10 ;

echo '<br>'.rand() % 20 ;




/**
 * var name = []
 * name.length
 */

?>