<?php

function fizzBuzz($start, $end) {
    /* Not optimal */
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 3 === 0)
            echo 'Fizz';

        if ($i % 5 === 0)
            echo 'Buzz';

        if ($i % 3 && $i % 5)
            echo $i;

        echo PHP_EOL;
    }
}


function fizzBuzzOptimal($start, $end) {
    /* Optimal */
    for ($i = $start; $i <= $end; $i++) {
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
}
