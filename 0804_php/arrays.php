<?php

/**
 * var name = []
 * name.length
 */

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


echo '<br>rand(): '.rand(); 

echo '<br>range 00-09: '.rand() % 10 ;

echo '<br>range 00-99: '.rand() % 100 ;

echo '<br>range 00-999: '.rand() % 1000 ;

$random = rand() % 5;
echo '<br>range 00-04: '. $random ;


$names = array(
    'Stephanie', 'Yash', 'Reagan', 'Erik', 'Orandel'
);

echo ' random name: '.$names[$random];


?>