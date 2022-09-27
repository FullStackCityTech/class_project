<?php
$host = 'localhost:3307';
$username = 'root';
$password = '';
$server = 'survey';

$mysqli = new mysqli($host, $username, $password, $server);

$user_id = rand() % 5000;
 

//topic goal level howLong 
if($_POST['submit']) {

    echo '<pre>'; print_r($_POST); echo '</pre>';

    // $_POST['goal'] //array
/* 
    $goalJson = json_encode($_POST['goal']);

    // echo $goalJson.' ';

    //////////////////// howLong \\\\\\\\\\\\\\\\\\\\\\\\\\\
    $queryH = "INSERT INTO survey (question, answer) VALUES 
    ('howLong', '".$_POST['howLong']."')";

    print $queryH.'<br>'; 

    if(!$mysqli -> query($queryH)) {
        echo("Error description: " . $mysqli -> error);
    }

    //////////////////// level \\\\\\\\\\\\\\\\\\\\\\\\\\\
    $queryL = "INSERT INTO survey (question, answer) VALUES 
    ('level', '".$_POST['level']."')";

    print $queryL."<br>";

    if(!$mysqli -> query($queryL)) {
        echo("Error description: " . $mysqli -> error);
    }

*/

    unset($_POST['submit']);

    $postJson = json_encode($_POST);

    echo '<pre>'; print_r($postJson); echo '</pre>';


    $queryT = "INSERT INTO survey (user_id, answer) VALUES 
    ('".$user_id."', '".$postJson."')";

    print $queryT."<br>";

    if(!$mysqli -> query($queryT)) {
        echo("Error description: " . $mysqli -> error);
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <style>
.form-check .form-check-input {
    float: none !important;
}
    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-9">

                <form method="POST">
                    <h1 class="text-center">Student Survey</h1>
                    <div class="mb-3 text-center">
                        <label for="" class="form-label">How long have you been studying English? </label>
                        <input type="text" class="form-control" name="howLong" placeholder="">
                    </div>
                              
<label class="form-label">What is your English level?</label>         

<?php
function englishLevelRadioButton($level) {

    $lowercase = strtolower($level); //A1 - a1

    if($level == 'A1') $isChecked = 'checked';
    else $isChecked = '';

    return '<div class="form-check">
    <input class="form-check-input" type="radio" name="level" value="'.$lowercase.'" '.$isChecked.'>
    <label class="form-check-label" for="">'.$level.'</label>
</div>';
}

$levelsArray = array('A1', 'A2', 'B1', 'B2', 'C1', 'C2');

foreach($levelsArray as $level) {
    echo englishLevelRadioButton($level);
}
?>

<p>&nbsp;</p>

<label class="form-label">What are your goals?</label>

<?php

function goalsCheckBox($goal, $desc) {
    $value = strtolower($goal); //Listening - listening

    return '<div class="form-check form-check">
    <input class="form-check-input" type="checkbox" name="goal[]" value="'.$value.'">
    <label class="form-check-label">'.$goal.' - '.$desc.'</label>
  </div>';
}


$goalsArray = array(
    'Listening' => 'we will listen to audio and movies',
    'Speaking' => ' focus on conversation', 
    'Reading' => 'we will read excerpts from books, news articles to expand your vocubulary and grammar',
    'Writing' => ' we will focus on grammar and spelling'
);

foreach($goalsArray as $goal => $desc) {
    echo goalsCheckBox($goal, $desc); 
}

?>

<p>&nbsp;</p> 

<label>Do you want to focus on specific topics?</label>
<div class="form-floating">
  
  <textarea class="form-control" placeholder="" id="floatingTextarea" name=
  "topic"></textarea>
  <label for="floatingTextarea">Ex. food, travel, culture, movies, technology, etc
    </label>
</div>

<input type="submit" name="submit" class="btn btn-primary" value="Submit Form">

                </form>
            </div>
        </div>
    </div>
 
</body>
</html>