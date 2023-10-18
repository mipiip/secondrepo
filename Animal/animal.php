<?php

class Animal{
    public $cry = "bowbow!";
    
    function bow(){
        echo $this->cry . PHP_EOL;
    }
}

$animal_1 = new Animal();
$animal_1->bow();