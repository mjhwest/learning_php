<?php

/**Functions */

//this lesson is about accepting arguments the default values union types argument unpacking and more
//your able to define parameters of the function within the parentheses of the function defintion

declare(strict_types=1); //the strict types will currently throw and error because we expect x and y to be ints

function foo(int|float|string  $x, int |float | string  $y =10) { //x and y are the paramters// // you can also type hint by adding the expected value next to x n y
return $x * $y;                 //you can use | and allow multiple values
}

echo foo(5.0 /*'10'*/); //the 5 and 10 arguments of x and y that we pass to the function for those parameters
                            //this will still work as we have no enforced strict types.
                            //we can add strict types be inserting it at the top of the document.
                            //you could remove the 10 from the echo and put the value of y in the parameter and it would work.


echo '<br />';
echo '<br />';
echo '<br />';

//-----------Passing Arguments by value vs by reference

function boo (int|float $m, int|float $g): int|float {
    if ($m % 2 === 0) {
        $m /= 2;
    }
    return $m * $g;
}

$a = 6.0;
$b = 7;
echo boo($a, $b) . '<br />';

var_dump($a, $b);


echo '<br />';
echo '<br />';
echo '<br />';


//--------------------SPLAT OPERATORS
//Variadic functions are functions that accept variable number of arguments

function sum (...$numbers): int|float {
    //line 48; instead of defining multple paramters you can use SPLAT which is ... then variable name
    //and it will capture the arguments being passed to the function into an array and numbers will now be an array containing all those arguments.


    //number is now an array containing all the arguments

    $sum = 0;
    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;

  return $h + $p;
    }

$qw = 6.0;
$as = 7;
echo sum($qw, $as, 10, 10, 10, 10, 10) . '<br />'; //we can now pass in whatever vales we want into the argument and we will get the correct value.


?>