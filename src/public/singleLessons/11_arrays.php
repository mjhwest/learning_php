<?php 
//Arrays 
//Arrays are just a list of value where those values can be of multiple data types. 

$programingLanguage1 = 'PHP'; 
$programingLanguage2 = 'Java'; 
$programingLanguage3 = 'Phython'; 

//Lets refractor this ^^^ into an array 

$programingLanguages = ['PHP', 'Java', 'Phython']; 
//like strginfs arrays are indexed by numbers so php = 0, java = 1, phythong = 2 . 
#echo $programingLanguages[1]; 
//this will print java as its number 1 in array. 
//we can check if an item is at a specfic point of an array by using ''isset''. 
#var_dump(isset($programingLanguages[0])); /*NOTE; this will print true as the array is set at array index 0*/

//---------MUTATE ARRAYS
//if we wanted to change 'Java' to C++
$programingLanguages[1] = 'C++'; 
#echo $programingLanguages[1]; /* this will now change it from Java to C++ */ 

//we could also use var_dump or printr to see the contents of the array 
#var_dump($programingLanguages); /* this nethod alos includes the types */

print_r($programingLanguages);

//--------Length of Array 
//to get the length of an array you can use a function called count. 

#echo count ($programingLanguages);       //this will give 3
echo '<br />';



//--------Add an new element to an array 
//  this is done by using an empty square bracket syntax 

$programingLanguages[] = 'React';

print_r($programingLanguages);
echo count ($programingLanguages);


//------Array Push 
// another way of pushing an element to an array is by using array_push 
/*an array push just mutates the array, it means that the variable we pass is passed via reference, so anything array push does to array will modify the original array    */ 

array_push($programingLanguages, "Handles", "JQuery"); 
print_r($programingLanguages);
echo count ($programingLanguages);


//-------------------Name Your Keys 
//You can define and name your keys. They must be either a string or intger. 
//When you have named Keys in an array its called an ASSOCIATIVE ARRAY. 



$newLanguages = [
    'php' => '8.0',
    'phyton' => '3.9'
];

 print_r($newLanguages); /* this will now show the named key and its value  */ 

echo $newLanguages['php']; /* this will now show the value of the key */ 



//----------MUTLI DIMENSIONAL ARRAYS 
//arrays can be multi dimensional and made up of many things, strings, ints, floats, booleans etc 


$testingLanguages = [
    'abc' => [
        'creator' => 'Michael West',
        'extension' => '.php',
        'website' => 'www.mikenet.com',
        'isOpenSource' => false, 
        'versions' => [
            ['verson' => 43, 'releaseDate' => 'Nov 11, 2022'],
            ['verson' => 53, 'releaseDate' => 'Nov 16, 2023'],
        ],
    ], 
    'yeoport' => [
        'creator' => 'Port Power',
        'extension' => '.port',
        'website' => 'www.mport.com',
        'isOpenSource' => true, 
        'versions' => [
            ['verson' => 410, 'releaseDate' => 'Apri 11, 2022'],
            ['verson' => 323, 'releaseDate' => 'Nov 16, 2014'],
        ],
    ], 
];

print_r($testingLanguages);

/*Note; if you wanted to accsed the key value of extension in abc you would do the following, */
echo $testingLanguages['abc']['extension']; /*this would print .php */ 

/*if you wanted to access a particular part of a sub array */ 
echo $testingLanguages['abc']['versions'][0]['releaseDate'];



//------REMOVING AN ELEMENT FROM AN ARRAY 
// array_pop ---removes the final element from an array 
// array_shift --removes the first element from an array 

$array = ['a', 'b', 50=> 'c', 'd', 'e']; 

echo array_pop($array);
echo array_shift($array);

print_r($array);            /* you can see the 'e' has been removed */ 






//-------UNSET to remove an element from an array 
// unset is used to destroy variables but when used on an array and you specify the index you will remove that element from the array . NOTE: if you dont specify index it will destory the entire array. 


unset($array[1]);
print_r($array); /*NOTICE this has removed the index 1 i.e. C from the array*/ 


//------------CASTING TO ARRAYS

$x = 'food'; 

var_dump((array) $x);


?>