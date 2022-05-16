<?php

/** This is a handy link to explain array function

 https://www.php.net/manual/en/ref.array.php

 */

require 'helpers.php';

//array_chunk(array $array, int $length, bool $preserverKeys = false): array

//=------ARRAY CHUNK
//sometimes you might wana split an array into chunks of arrays with specified length.
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4,'e' => 5];

prettyPrintArray(array_chunk($items, 2, true )); //preserve keys will print out the real array values i.e. a=1



//-----------------------------____ARRAY COMBINE
//array_combine(array $keys, array $values): array
//this function creates an array from the given keys and values it will throw an error if the number
//of elements in the first array dont match the number of elements in the second array.
//basically it will use the values from the array 1 as the keys and it will use the values from array 2 as the as the values and it will create the new  array.


$array1 = ['a','b' , 'c' ];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));
//


//-----------------------ARRAY FILTER
//Array filter iterates over each array value and it passes the value to the given callback.
//if the return of that callback is true then the value is returned into the resulting array.
//otherwise the element will be discarded.

//lets filter out the odd numbers from this array and only keep the even numbers.

$array = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($array, fn($number) => $number %2 === 0); //pass the array function as the first argument and the second is a callable or callback function
    prettyPrintArray($even);

echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';


$newArray = [ 'd' => 3, 'b' => 1, 'c' => 4, 'a' => 2];
prettyPrintArray($newArray);

asort($newArray); //asort - sort array by values
                        //ksort - sort by keys (a,b,c,d etc)
                        //usort -cuatom callback (needs 2 values)

prettyPrintArray($newArray);


?>