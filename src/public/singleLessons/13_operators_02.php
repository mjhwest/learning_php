<?php 

//-----------------ERROR CONTROL OPERATORS (@)
//if you add this to an expression it will supress any erros from that expression and the erros that it supresses mainly depend on how you have error handling configured in PHP. 
$wq = @file('foo.txt'); /*this does not exisit so will give an error */ 
                      /* if you add an @ infront of it, the error will go */
                    //this is not recommended 





//-----------------INCREMENT / DECREMENT OPERATORS (++, --)
// You can use incrementing operators to increment values by 1  or use decrementing operating to decrement by 1 
//there are 2 types of increment and decrement operators 
//PRE-INCREMENTAL DECREMENTS and POST-INCREMENTAL DECREMENTs . 

$a = 5;  

$a++; //post increment --returns the value and then does the increment 
$a--; //post decrement --reutns value and then decrements it. 
++$a; //pre-increment --first increments and then returns the value 
--$a; //pre-decrement --first decrements and then returns the value 


#echo $a++; //this gives us 5, the REASONS is because it first returns the value and then does the increment 
echo '<br />';
#echo $a; 
echo '<br />';
echo ++$a; //this returns 6 and it is incrementing firs then adding the value. 

//thg same applies for the decrement operators 

//NOTE: increment and decrement operators only affect numbers and strings, ARRAYS, BOOLEANS, RESOURCES and OBJECTS are  not effected. 


echo '<br />';
echo '<br />';
echo '<br />';
//---------------------------------LOGICAL OPERATORS (&& || ! and or xor)
//logival operators allow you to combine multiple conditions together. 
//You could use them to combine and create a larger conditional statement.

//&&        END Operators 
//its evalautes  to true only if both operands evaludate to true  
$b = true; 
$c = false; 

var_dump($b && $c); //this would only return TRUE if b and c were both true, they are not so return is false. 

echo '<br />';
echo '<br />';
echo '<br />';

// ||       OR OPERATORS 
//evaluates to true if either x or y evaluates to true 
$d = true;
$e = false; 
var_dump ($d || $e); //this will echo true and we one of them is TRUE. 

//! is a unary operator and it just a negation 



echo '<br />';
echo '<br />';
echo '<br />';



//---------------------------------------BITWISE OPERATORS ( & | ^ ~ << >> )
//bitwise operators are used to perform bit level operators, ie. on off switches  
//& operators will return bit that are set in both X and Y. 

$f = 6; 
$g = 3; 
var_dump ( $f & $g);


echo '<br />';
echo '<br />';
echo '<br />';


//------------------------------ARRAY OPERATORS (  + == === =/= <> ==/==          )

$h = ['a', 'b', 'c'];
$i = ['d', 'e', 'f', 'g', 'h']; 

$j = $h + $i; //what will happen is that this plus operator  will just computes union of the 2 array, union means take all the elements from variable y and append it to to the variable x if they dont exisit at the same index or the same key. 
            //In this case all three elements are are at the same indexes 
            
var_dump($j);

//we added G and H to the array and it was added 


//--------------------------Execution Operators (` ` )

//-----------------Type Operators (instanceof)

//----------------NullSage Operator - PHP8 (?)






?> 