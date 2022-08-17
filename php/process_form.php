<?php

if ($_POST) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 
</head>
<body>

  <form method="POST">
    <div class="mb-3 row">
         <div class="col-sm-10">
          <input type="text" class="form-control" name="city" value="">
        </div>
      </div>
      <div class="mb-3 row">
         <div class="col-sm-10">
            <input type="password" class="form-control" name="password">

        </div>
      </div>
      <div class="mb-3 row">
         <div class="col-sm-10">
            
            <input type="radio" name="favorite_number" value="2"> 2
            <input type="radio" name="favorite_number" value="4"> 4
            <input type="radio" name="favorite_number" value="6"> 6 

        </div>
      </div>
      <div class="mb-3 row">
         <div class="col-sm-10">
 
            <input type="checkbox" name="favorite_actor" value="keanu"> Keanu Reeves
            <input type="checkbox" name="favorite_actor" value="tom"> Tom Cruise
            <input type="checkbox" name="favorite_actor" value="brie"> Brie Larson
        </div>
      </div>

      <div class="mb-3 row">
         <div class="col-sm-10">
 
           <select name="second_fav_actor">
                <option>Keanu Reeves</option>
                <option>Tom Cruise</option>
                <option>Brie Larson</option>
           </select>

           <select name="fav_color">
            <option value="blue">Blue, Aqua, Ocean</option>
            <option value="purple">Fuschia, Magenta, Carmine, Indigo</option>
            <option value="red">Rose, Crimson</option>
            </select>
        </div>
      </div>

    <div class="mb-3 row">
         <div class="col-sm-10">

            <textarea name="blob_text"></textarea>

            <input type="submit" name="sub" value="Register">
        </div>
    </div>

</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</body>
</html>