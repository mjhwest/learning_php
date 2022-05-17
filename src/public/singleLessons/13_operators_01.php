  <?php 
/*OPERATROS */ 
//operator is something that takes one or multiple expressions and results in a value. 
//if an operator takes only a single value its called a UNARY operator 
//if an operators takes 2 values its called a binary operator (most of PHP operators are binary as they expexct 2 operands)
//if an operator requires 3 values its called a ternary operator 


//--------Arithemtic Operators (+ - * / % ** )
//These allow you to perform common arithmetic operators such addition, subtraction, multiplication divison, modules and exponentiation. 

 $x = 10;
 $y = 2; 
 var_dump($x + $y); /* additioon */
 echo '<br />';
 var_dump($x - $y); /* subtraction */
 echo '<br />';
 var_dump($x * $y); /*  */
 echo '<br />';
 var_dump($x / $y); /* additioon */
 echo '<br />';
 var_dump($x % $y); /* modules */
 echo '<br />';
 var_dump($x ** $y); /* exponentiation , i.e. to the power of .  */ 
 echo '<br />'; 


// TIP
// PLUS AND MINUS operators could be used to prefix a value or a variable and it will essentially just convert it to an integer or float 

$x = '10';
$b = 2; 
var_dump($x); /* this would result in a data type of string  */
echo '<br />'; 
/* but if it was prefdixed with a plus it will get converted to an int */
$x = '10';
$b = 2; 
var_dump(+$x); 

//TIP 
//DIVISION -  The type of result will always be FLOAT unless both operands are integers and theyre evenly divisible.
            // However if they are not evenly divisible (eg 10/3) the result will be float



//----------------------ASSIGNMENT OPERATORS ( = += -= /= %= **=)

$a = 5; 
#$a = $a * 3; /* this will echo out 15 as 5 x 3 is 15, but there is short hand, you can pre fix with your artimatic operaotr */
$a *= 3; /* this will also print out 15, the same priciple applies for + - / % ** */  
echo '<br />';
echo $a;  



//---------------------STRING OPERATORS  (. .=)
//the dot ( . ) is a concat and joins things 

$he = 'Roger Roger';

# $he = $he . " Rubber Duck"; /* we can make this shirt hand */ 
$he .=  ' Rubber Ducky'; // this is short hand of above line  
echo '<br />';
echo $he;  


//---------------------COMPARSION OPERATORS  (== === =/= < > )
//allow you to compare 2 values against one another 
// == , is a lose comparison, it does the type conversion for you. 
// ===, is a strict comparison where it also checks the data type of the value 

$yo = 5; 
$oy = 5; 
echo '<br />';
var_dump($yo == $oy); //this return true as 5 is equal to 5
var_dump($yo === $oy);  //this returns true as they also have the same data type 
                        // if one is changed to a string, == will return true as they are both 5, === will return fale as they are not the same data type 



//-----------------ERROR CONTROL OPERATORS (@)
//if you add this to an expression it will supress any erros from that expression and the erros that it supresses mainly depend on how you have error handling configured in PHP. 
$wq = file('foo.txt'); 






  ?> 