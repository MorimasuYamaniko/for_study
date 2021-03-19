<?php

    class Animal {
        public $cry = "bowbow!";
        
        public function __construct($cry) {
            $this->cry = $cry;
        }
        
        public function bow() {
        echo "{$this->cry}" . PHP_EOL;
        }
    }
    
    class Dog extends Animal {
    }
    
    class Cat extends Animal {
    }
    
    
    $animal = new Animal('bowbow!');
    $animal->bow();

    $dog = new Dog('dogdog!');
    $dog->bow();
    
    $cat = new Cat('catcat!');
    $cat->bow();
?>

