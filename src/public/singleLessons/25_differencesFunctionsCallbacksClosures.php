<?php


/** Variable, Anonymous and Arrow Functions  */

//Variable Functions
//  Simples means that you could call functions from variables by appending () next to the variable

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';


echo $x(1,2,3,4);

//----------------Anonymous Functions
//anonymous functions are also known as lamba functions are functions that have no name
//anonymous functions need to end with a semicolon (;)



//-------------Callable type and callback functions
//when a function is passed to another function as an argument and then is called within  that function its called a
//A CALLBACK FUNCTION

//php has a lot of built in functions that expect a callback function is an arguments like array, map or filter, sort etc.


//Arrow Functions
//Arrow functions were introudced in php 7.4 and is a cleaner syntax of an anonymous function
//arrow function syntac is especially useful as an inline callback  function like passing it an an argument to many of the PHP built in functions

/**line 35 to 45 is commented out */
//$array = [1,2,3,4]; //lets try and multiply every element by itself.
//
//$array2 = array_map(function($number) { //the first argument is a callback with a regular anonymous function
// return $number * $number;
//}, $array );
//
//
//echo '<pre>';
//print_r($array2);
//echo '</pre>';


/** THIS ABOBE WAY WORKS FINE, BUT CAN BE DONE CLEANER USING AN ARROW FUNCTION  */
$array = [1,2,3,4]; //lets try and multiply every element by itself.

$array2 = array_map(fn ($number) => $number * $number , $array );


echo '<pre>';
print_r($array2);
echo '</pre>';
?>