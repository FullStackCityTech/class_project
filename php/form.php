<?php
 


?>
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>post form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   
    <form method="POST" action="form0.php">
        
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="city" value="">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="state" maxlength="2">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Zipcode</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="zipcode">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">phone #</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="phone">
        </div>
      </div>

  
       <!--  city: <input type="text" name="city">
        state: <input type="text" name="state" maxlength="2">
        zip: <input type="number" name="zip"> -->
       
        <input type="submit" name="form0" value="submit form">

    </form>

    <form>
    <input type="submit" name="form1" value="submit form">
  </form>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>