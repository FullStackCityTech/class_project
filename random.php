<?php
$num10 = rand() % 10 + 1;
$num100 = rand() % 100 + 1;


//echo '<p>random number 1-10: <span id="bigNumber">'.$num10.'</span></p>';

//echo '<p>random number 1-100: '.$num100.'</p>';

$num4 = rand() % 5;


//random name
$names = array(
    'Stephanie', 'Yash', 'Reagan', 'Erik', 'Orandel'
);

echo '<p>random number 1-5: <span id="bigNumber">'.$num4.'</span> random name: <span id="bigNumber">'.$names[$num4].'</span></p>';
?>
<style>
    #bigNumber {
        font-size: 4em;
        font-weight: bold;
    }
</style>