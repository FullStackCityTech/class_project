<?php
global $here;
global $db; 
$here = "i am here"; 
$db = 'db object';

define( 'DB_NAME', 'wordpress' );


function scope() {
    global $here, $db, $var2, $var3;

    return $here.' '.$db.' '.DB_NAME.' ';
}

$string = scope();
echo $string; 



//  DB_NAME = 'change';

?>


<h1>Home</h1>

<p>home</p>