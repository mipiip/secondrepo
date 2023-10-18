<?php

class Animal{
    public $cry = "bowbow!";
    
    function bow() {
        echo $this->cry . PHP_EOL;
    }
}

class dog extends Animal {
    public $cry = "bow!";
}

class cat extends Animal {
    public $cry = "meow!";
}


$animal_1 = new cat();
$animal_1->bow();
