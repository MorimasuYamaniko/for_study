<?php
for($i = 1; $i < 31; $i++){
    switch($i){
        case $i % 15 === 0;
            echo 'FizzBuzz' . PHP_EOL;
            break;
        case $i % 5 === 0;
            echo 'Buzz' . PHP_EOL;
            break;
        case $i % 3 === 0;
            echo 'Fizz' . PHP_EOL;
            break;
        case $i < 31;
            echo $i .PHP_EOL;
    }
}
?>