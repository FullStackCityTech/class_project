<?php

$movies = array( 
    //key => value
    "Top Gun" => array(
        "Tom Cruise", //0
        "Val Kilmer" //1
    ),
    "50 Shades of Grey" => array(
        "Jamie Dornan",
        "Dakota Johnson",
        "Luke Grimes"
    ),
    
    "50 Shades Darker" => array(
        "Jamie Dornan",
        "Dakota Johnson"
    )
); 

//for 0 to N-1
foreach($movies as $key => $array) {
    echo "<div><u>".$key. "</u> starring  <br>";
    
    foreach($array as $actors) {
        echo $actors."<br>";
    }

    echo "</div>";
}


$languages = array(
    "japanese" => array(
        "color" => "biege",
        "hello" => "こんにちは",
        "goodbye" => "さようなら", 
    ), 
    "chinese" => array(
        "color" => "blue",
        "hello" => "nihao", 
        "goodbye" => "zai jian",
    ),
    "spanish" => array(
        "color" => "purple",
        "hello" => "hola", 
        "goodbye" => "adiós",
    )
);
?>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<?php

foreach ($languages as $lang => $array) {
    echo "<b>".$lang. "</b> <br>";

    foreach ($array as $word => $translation) {

        if($word == 'color') {
//            $string = ' class="'.$translation.'" ';
            $class = $translation;
        }
        else
            echo " <p class='$class'>".$word.": ".$translation."</p>";      
    }

    echo "<br><br>";

}

?>
<style> 
    .biege {
        color:rgb(212, 180, 138);
    }

    .blue {
        color:rgb(125, 165, 180);
    }

    .purple {
        color:rgb(207, 154, 231);
    }

</style>