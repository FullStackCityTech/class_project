<?php
//classes objects - object oriented programming 
class Car {
 
   public $wheels = 4; 
   public $brand = "Honda"; //members 

    public function drive() { //methods
        echo "Car - drive() - # of wheels: ".$this -> wheels;
    }

    public function flat_tire($num) {
        $this -> wheels = $num;
    }

}


//object
$newCar = new Car();

echo '<pre>';
print_r( $newCar );  
echo '</pre>';

echo $newCar->wheels."<br>";
echo " ".$newCar->brand."<br>";
echo $newCar->drive()."<br>";
//echo $newCar->flat_tire()."<br>";
//echo $newCar->drive()."<br>";
//echo $newCar->flat_tire()."<br>";
//echo $newCar->drive()."<br>";

echo $newCar->flat_tire(7)."<br>";

echo $newCar->drive()."<br>";


class mysql {

    public $connect_errno; 
    public $connect_error;

    function __construct($host, $username, $password, $dbname) {

    }

    public function query($queryString) {
  
    }

}

?>