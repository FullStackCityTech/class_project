<?php
function power_level($lang){

    if($lang == 'en') {
        $pl = 9000;
        // echo ' 9000 ' ;
    }
    else  {
        $pl = 8000;
//        echo ' 8000 ';
    }

    return $pl; //returns a value
}

// $lang = 'jap'; //8000
$level = 8000;

echo "it's over ".power_level('jap').'!   ';
// echo "it's over ".$level.'!   ';

$lang = 'en'; //9000
$power = power_level('en');

echo $power;


$timezone = 'Asia/Tokyo'; 
date_default_timezone_set($timezone);

echo '<br><br> the time zone is '.$timezone;

echo '<br><br>   the date is: '.date('d j D l m n M F Y y');

echo '<br><br>  '.date('m/d/y');  // 08/12/2022

echo '<br><br> '.date('g G h H i s a A ');

echo '<br><br> '.date('h:i:s a');

echo '<br><br> '.time();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>
        #footer {
            position: absolute;
            bottom: 0;
            text-align: center;
            padding: 30px;
            background-color: gray;
        }
    </style>
</head>
<body>
    

<div id="footer">
    <?php
        echo " Copyright &copy; ".date('Y');
    ?>
</div>

</body>
</html>