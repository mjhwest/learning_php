<?php
/*  BOOLEANS 
is a simple representation of a truth value, it can either be true or false. 
*/

#$iscomplete = true; 
$iscomplete = (string) true; 


//integers 0 -0 = false 
// floats 0.0 -0.0 = false
// '' = false                     - an empty string 
// '0' = false                    - a 0 as a string 
//[] = 'false;                    - an empty array 
//null = 'false' 

//var dump to confirm function type, i.e. boolean
#var_dump($iscomplete);  

//conver iscomplete to string 
var_dump(is_bool($iscomplete));


if($iscomplete) {
    //do something
    #echo 'success';  
} else {
    #echo 'fail';
}    //do something else 
