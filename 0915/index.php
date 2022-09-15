<?php
error_reporting(0);

// echo strtolower("FFGJRJKFVKBFFKMKFMKKMKFMKVMF");

$haystack = array(
    "chest", "triceps", "legs", "shoulders", "back", "abs" 
);

$needle = "abs";

if(in_array($needle, $haystack)){
    //echo " true";
} else {
    //echo " false";
}

$acceptedImageTypes = array (
    "jpg", "jpeg", "png", "gif", "tfif", "bmp", "svg"
);

$needle = "jpg1";


if(in_array($needle, $acceptedImageTypes)){
    echo " yes it's an image ";
} else {
    echo " no it's not an image ";
}


echo '<pre>';
print_r($_FILES['imageFile']); 
echo '</pre>';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageFile"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
     
    $error = 0;
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $error = 1;
    }

    // Check file size
    if ($_FILES["imageFile"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
       $error = 1;
    }
    else {
        echo " Your file size is just right";
    }
    
    // Allow certain file formats
    if( !in_array($imageFileType, $acceptedImageTypes) ) {
        echo " Sorry, only image files are allowed. Your file type is: ".$imageFileType;
        $error = 1;
    }

    if($error == 0)
    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!--  text password number radio checkbox button -->
    
    <form method="POST" enctype="multipart/form-data">
       <p> <input type="text"> </p>
       <p> <input type="password"> </p>
        <p><input type="number"></p>
        <p><input type="radio"></p>
        <p><input type="checkbox"></p>
        <p><input type="button"> </p>

        Select image to upload:
        <input type="file" name="imageFile" id="imageFile">
        <input type="submit" value="Upload Image" name="submit">
      </form>

</body>
</html>