<?php
   
   
 for ($i = 1; $i <= 100; $i++) { 
    if ($i % 15 === 0){
      echo "FizzBuzz";
    } elseif($i % 3 === 0) {
       echo "FIZZ";
    } elseif($i % 5 === 0) {
        echo "BUZZ";
    } else{ 
       echo $i;
    }
    echo PHP_EOL;
}