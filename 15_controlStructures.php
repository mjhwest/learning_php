<?php
//Control Structures (if / else /elseif / else if )

//A PHP script is made of a series of statements whwere a statement can be an assignment, functoin, a loop, if else condtion and much more. 
//a control structure is something that alllows you to group multiple statements and also allows you to control the flow of the code execution. 
//i.e. you can execute A only if condion B passes or keep executing A until condtion B is met. 

//IF
 $score = 65;


if ($score > 90) {
    echo 'A'; 
}   //this prints as the score 90 is greater than 90, if the score was 65, then it would print nothing. 
    //echo 'A' only executes only if it evalatates to true. 

else if($score >=  65) {
    echo 'D';
    
}


else {
echo 'no pass';
}




?>