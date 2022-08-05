<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <style>
        /*   .container, .row, .col */

        * {
         border: 1px solid red; 
        }

        .col-lg-3 {
            text-align: center;
        } 

        .taller {
            background-color: rgb(218, 165, 230);
            height: 200px;
        }

        .bgcolor {
            background-color: green;
        }
    </style>
</head>
<body>

<?php 
$colA = 6;

$colB = 12 - $colA;

?>

   
    <div class="container">
      <div class="row">
        <div class="col-lg-<?php echo $colA?>">
          bootstrap columns
        </div>
        <div class="col-lg-<?php echo $colB?>">
          bootstrap columns
        </div>
      </div>

      <div class="row">
        <?php
    //errors warnings notices
        error_reporting(0);

        for($count = 1; $count < 13; $count++) {

            if($count % 2 == 0) { //even
                $class = "bgcolor";
            } 
            else { //odd
                $class = "";
            }
            
            echo " <div class='col $class '>col $count </div>";
        } 
        
        ?>
      
      </div>
    </div>


    <?php

        $favoriteAnime = 'code geass';

        switch($favoriteAnime) {
            case "code geass":
     ?>
        <p>obey me</p>
        
     <?php
                break;
            case 'bobs burgers':
                print('bobs burgers');
                break;
            case 'dbz':
                print('over 9000 (or 8000??)');
                break;
            default: 
                echo " never heard of it";
        }

    ?>


    <script>

        //1 to 12
        for (  var count = 0;
        count < 13; 
        count++ ) {

            console.log(count);
        }

 


    </script>

</body>
</html>