<?php
class Cat {

    public $paws; 
    public $speed;
    public $stamina;
    public $tail;

    function __construct() {
        print " In constructor<br>"; 
        $this->paws = 4;
        $this->speed = 5;
        $this->stamina = 5;
        $this->tail = 10;
    }

    public function show_cat() {
        print "paws:". $this->paws ." speed: ". $this->speed." stamina: ". $this->stamina." tail: ". $this->tail." <br>"; 
    }

    public function set_speed($speed){
        $this->speed = $speed; 
    }

    public function set_stamina($sta){
        $this->stamina = $sta; 
    }

    public function run(){
        $this->stamina =  $this->stamina - 1;
        echo " This cat is running. Stamina: ". $this->stamina. " Speed: ". $this->speed."<br>";
    }
}

$tom = new Cat(); //

$tom->set_speed(10);
$tom->set_stamina(10);

$tom->run();
$tom->run();
$tom->run();


$blackCat = new Cat();//
$blackCat->set_speed(15);
$blackCat->set_stamina(40);
$blackCat->run();
$blackCat->run();
$blackCat->run();
$blackCat->run();


$yellowCat = new Cat();
$yellowCat->show_cat();
$yellowCat->set_speed(9); $yellowCat->set_stamina(90); 
$yellowCat->show_cat();



?>
<style>
    body{
        background-color: black;
        color: white;
    }
</style>