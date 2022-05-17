<?php 


//NULL 
// Null is a special data type that represent a variable with no value.  
// A Variable can be a null if its assigned the constant null it has not been defined yet or it has been unset


//NULL CONSTANT 
//you could have a variable assigned to a null constant and this is a predefined constant that is case insensitive 
//which means that you could use null uppsercase or lowercase. 

#$x = null; 
$x = 12;
echo $x;

//whem we echo this out nothing is printed, this is expected. This is because when echoing something out it is first cast into a string, 
//when a null get casts to a string it will be converted to an empty string and thats why we see nothing on the screen.
//NOTE: We can use VAR_DUMP to ensure its actually null 

var_dump($x);

//we can also use a function called is_null to check that it infact null, this is a boolean and will echo true or false when using var_dump 
var_dump(is_null($x)); 

//if the variable ($x) was changed to an integret it would print false, as it is not null 



/* ANOTHER WAY a varaible can be null is if it is not defined yet  */ 

var_dump($ttt); /* this will show a warning on the screen that the variable is not defined */ 





?>