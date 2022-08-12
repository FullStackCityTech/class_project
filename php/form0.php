<?php

if($_POST['form0']) { //empty = false | not empty = true
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  
  echo $_POST['city'].' '.$_POST['state'].' '.$_POST['zipcode'];
}

if($_POST['form1']) {
    ///////
}

/**
$_POST = array(
  'city' => '.....',
  'state' => '......',
  'zipcode' => '....'
); 
 */


?>