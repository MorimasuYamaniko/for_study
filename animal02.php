<?php

    class Animal {
        public $cry = "bowbow!";

        function bow(){
            echo $this->cry . PHP_EOL;
        }
    }
    
    class Dog extends Animal {
        public $cry = "dogdog!";
    }
    
        class Cat extends Animal {
        public $cry = "catcat!";
    }
    
    $animal_1 = new Animal();
    $animal_1->bow();
    
    $dog = new Dog();
    $dog->bow();
    
    $cat = new Cat();
    $cat->bow();
    
?>