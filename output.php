<?php
	require('input.php');

	print_r($numbers);
	
	foreach ($numbers as $value){
		switch($value){
	        case $value % 15 === 0;
	            echo 'FizzBuzz' . PHP_EOL;
	            break;
	        case $value % 5 === 0;
	            echo 'Buzz' . PHP_EOL;
	            break;
	        case $value % 3 === 0;
	            echo 'Fizz' . PHP_EOL;
	            break;
	        case $value < 100;
	            echo $value .PHP_EOL;
		}
	}
?>
