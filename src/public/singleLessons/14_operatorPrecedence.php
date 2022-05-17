<?php 
//Opertator Precedence and Associatity . 
//Youre able to combine operators  to form complex expressions. 
//when multiple operators are used in an expression theyre grouped by their precedence and if they have the same precedency than their associativty decides how they are grouped .

//https://www.php.net/manual/en/language.operators.precedence.php
//the above link is a table sorted by precedence. top is highest. 

$x = 5 + 3 * 5; 

echo $x;

//if there was no precedence this would = 40, but there is precedence. 

//the multiplication has higher precedence than addition and subtraction 

// 3 x 5 = 15 is first then you do the addtion of 5  and then = becuase it is lower precedence 

// the final answer is 20 




?>
