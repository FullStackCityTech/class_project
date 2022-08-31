<?php
error_reporting(0);
date_default_timezone_set('America/New_York');

if($_POST) {
   echo  $_POST['timepicker'].' '.$_POST['datepicker'];

echo ' ||| '.   date('m/d/Y'). ' '.date('h A').' ||| '; 

    if(date('m/d/Y') == $_POST['datepicker'] ) {
        echo ' today';
    }
    else {
        echo ' not today';
    }

    if(date('h A') == $_POST['timepicker'] ) {
        echo ' right now';
    }
    else {
        echo ' not now';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <style>
        #time {
            text-align: center;
            position: absolute;
            top: 50%;
            width: 100%;
        }
        .timepicker, #datepicker {
            height: 40px; 
            font-size: 38px; 
            width: 300px;
        }
    </style>
</head>

<body>

<div id="time">
<form method="POST">
    <input id="datepicker" name="datepicker" value="<?php echo $_POST['datepicker']; ?>" >
    <input class="timepicker" name="timepicker" value="<?php echo $_POST['timepicker'] ?>" >
    <input type="submit" value="Submit">
</form>
</div>

    <script>
        $(document).ready(function () {
            $( "#datepicker" ).datepicker();

            $('.timepicker').timepicker({
                timeFormat: 'hh p',
                interval: 60,
                minTime: '12:00pm',
                maxTime: '10:00pm',
//                defaultTime: '2:00pm',
                startTime: '10:00',
                dynamic: true,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>
</body>

</html>