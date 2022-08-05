<?php

$variable = 10;
$x = 20;
$string = "hello world";

// echo $variable; 

echo " hello world $variable ".$variable." <br>";

echo  $string." ".$variable." ".$x;

echo "<br>"; 
echo "<br>"; 
$y = 5;
echo $x + $y; echo "<br>"; 
echo $x - $y; echo "<br>"; 
echo $x / $y; echo "<br>"; 
echo $x * $y; echo "<br>"; 
echo $x % $y; echo "<br>"; 

print($y); echo "<br>"; 

$z = 40;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
.php_code {
    background-color: #EEEEEE;
    border: 2px solid gray;
    padding: 20px;
}
    </style>

</head>
<body>
  <h1>html</h1>
  <div>div</div>

<?php
echo " z is: ".$z." ";

?>

    <div class="php_code">
    <!-- begin php code -->    
    <?php 
        echo "if else statement "; 

        $japan = false; $canada = false; 
        if($japan) {
            echo "been to japan ";
        }
        else if ($canada) {
            echo "been to canada ";
        }
        else {
            echo "been nowhere ";
        }

        if(!$japan){
            echo " have NOT been to japan";
        }

    ?>
    </div>

    <?php
    $red = true; $green = false;

    if($red) {
    ?>
        <p>red....</p><img src="../images/cat_1.jpg" alt="cat 1">
    <?php
    }
    else {
    ?>
        <p>green</p><img src="../images/cat_2.jpg" alt="cat 2">
    <?php
    }
    ?>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<?php
$c = 0;
while($c <= 10){
    echo " ".$c." ";
    $c++; //
}

echo "<p>&nbsp;</p>";

$c = 0;
do { 
    echo " ".$c." ";
    $c++; //
} while ($c <= 10);

?>

<script>
var japan = true;  

if(japan) {
    console.log('been to japan');
}
</script>

</body>
</html>