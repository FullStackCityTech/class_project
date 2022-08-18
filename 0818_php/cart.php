<?php
session_start(); 

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


function f1 () {
    echo '('.__FUNCTION__.')';

    f2();
}

function f2 () {
    echo '('.__FUNCTION__.')';

    f3();
}

function f3 () {

    echo '<br> '. __FILE__.' '.__FUNCTION__.' '.__LINE__;

}




if($_SERVER['SERVER_NAME'] != 'localhost') {
    error_reporting(0); //removes all warnings and notices
    //only shows critical errors
}


echo 'warning here: '.$_GET['hhhhhhhhhhhhhh'].' ';


$firstLine = __LINE__.' ';

/*
echo "<pre>";
print_r($_GET); 
echo "</pre>";
*/


$secondLine = __LINE__.' ';

if ($_GET['origin'] == 'page1') {
    echo "you came from page 1"; 
}
else if ($_GET['origin'] == 'page2') {
    echo "you came from page 2"; 
}


foreach( $_GET as $key => $value  ) {
    echo ' '.$key.' '.$value.' <br>';
}

foreach( $_POST as $k => $v ) {
    echo ' '.$k.' '.$v.' <br>';
}


echo __FILE__; 

echo '<p>&nbsp;</p>';

echo " ".$firstLine." ".$secondLine.' '. __LINE__.' ';

echo __LINE__.' ';

echo __DIR__.' ';

f1();   
//f2();
//f3();

/*
echo "<pre>";
print_r($_SERVER); 
echo "</pre>";
*/

echo '<br><br>SERVER_NAME: '.$_SERVER['SERVER_NAME'].'<br>';

echo 'SERVER_ADDR: '.$_SERVER['SERVER_ADDR'].'<br>';

echo 'SERVER_SIGNATURE: '.$_SERVER['SERVER_SIGNATURE'].'<br>';

echo 'SCRIPT_FILENAME: '.$_SERVER['SCRIPT_FILENAME'].'<br>';

echo 'PHP_SELF: '.$_SERVER['PHP_SELF'].'<br>';

echo 'REQUEST_URI: '.$_SERVER['REQUEST_URI'].'<br>';

echo 'server time: '.date(' m/d/Y  h:i:s A').'<br>';



?>

<pre>formats text</pre>