<?php

class Tax {
    public $price;
    public $result;
    
    public function cal_tax($argv){ 
        
        $this->price = $argv[1];
        echo $result = $this->price * 1.1 . PHP_EOL;
    }
    
    public function price($argv) {
        echo $this->price . PHP_EOL;
    }
    
}

$price01 = new Tax();
$price01->cal_tax($argv);
$price01->price($argv);

?>