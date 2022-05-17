<?php 
//LOOPS 
#Loops are used to execute statements multiple times 

//------------------------------While 
$i = 0; 
while ($i <= 15) { /* start with 'while keyword followed by () which contains the conditional expression, as long as the statment is true, it will keep on running inside the {}   */
    echo $i++;  //if the expression evaluates to FALSE (i.e. i = 30), it would never run. 
}

echo '<br />';
echo '<br />';
echo '<br />';

//------------do-while 
//do while is simialr to while loop, with the main difference being that the do-while loop guarantees that the statements within the loop will execute at least once. 




//---------------for 
//For look requiries 3 expressions seperated by semicolons. 

#the first expression $a=0 only evaluates the first time . 
#the second expression is the conditional expression and is evaluted at the beginning of each iteration. 
#the first espression is evalusted at the each of each iteration, 

for ($a = 0; $a < 15; $a++) { 
    echo $a; 
}

//in the above loop we are creating a variable called 'i' and assigning 0 to it, 
//we are then checking if i is less than 15, 
//finally we are incrementing i. 





//------------------------foreach 
//foreach loop is used to iterate over arrays or objects  

$programmingLanguages = ['php', 'javascript', 'jquery', 'python', 'c++', 'rust']; 

foreach ($programmingLanguages as $language ) {
    echo $language . '<br />'; 
}

//for every iteration it is assigning the value of the current elements in an array to the variable   'language'. 
//if you try and use for each on something thats not an array you will get an error. 








?> 