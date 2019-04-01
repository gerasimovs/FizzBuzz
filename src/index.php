<?php

/* Not optimal */
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0)
        echo 'Fizz';
        
    if ($i % 5 === 0)
        echo 'Buzz';
        
    if ($i % 3 && $i % 5)
        echo $i;
    
    echo PHP_EOL;
}

/* Optimal */
for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        /* $i % 3 === 0 && $i % 5 === 0 */
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    
    echo PHP_EOL;
}
