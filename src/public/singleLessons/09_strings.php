<?php 
//String is a series of characters 
//when the value is enclosed in a single or double quoutes it is a string. 


#$firstName = 'Michael';
#$lastName = " {$firstName} West";
#echo $lastName;

// single quotes cannot use variables
// double quotes you can 

//---------------------
//how you can actually access a specific character in a given string  

$firstName = 'Michael';
$lastName =  'West';

$name = $firstName . ' ' . $lastName;   /* the ' ' here is concatinating the first and last name  */

#echo $name . '<br />';

// if we want to get a specifc part of the string when can use an array, ie. to get the i from michael 

#echo $name[-3] . '<br />';     /* we use the 1 as its an array and starts at 0  */ 
                        /* you can access the back of the string by using negative numbers -1 for e in Michael */

#echo $name[2] = '!';  /* we can change the value of a certain letter by targeting it */ 



//Heredoc   - treat strings as if it was encolded in double quotes 
            //herdoc CAN have variables 
            // create a variable, then tripple less than sign (<<<), then an identifier, of your text then close with identifer and close with ; 
$test = <<< TEST
Test 1
Test 2 
Test 34
TEST;

echo $test; 

/* we can use nl2br as a line breaker  */
echo nl2br($test);             


//Nowdoc           - treats strings as if they were enclosed in single quotes 
                    //Nowdoc CANNOT have variables.  
                    //syntax for Nowdoc is same as Herdoc, EXCEPT the identifier needs be closed with single quotes and once 

$apple = <<< 'APPLE'

1 apple
2 apple 
apple apple

APPLE;

echo nl2br($apple) ; 