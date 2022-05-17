<?php

//SWITCH STATEMENTS 
// The switch is simialr to if else statements, it allows you to compare the same expression with multiple different values and run different parts of code based on which 
//value matches the given expression. 

//we write the switch statement by using the keyword switch and within the () we  provide the expression
//based on what expression evaluates to we check multuple different cases 

//switch statement works line by line and and will continue to do so until it finds the matching case . 

$paymentStatus = 'paid';

switch ($paymentStatus) {

    case 'paid':
        echo 'Paid';
        #break; //a break statement is used so if it is 'paid' it stops running . 
                //if there was no break statement the code would continue to run so it would also print Payment Declined. 

    case 'declined':
        echo 'Payment Declined';
        break;

     case 'pending':
        echo 'Pending Payment';
        break;

        default: 
         echo 'Unknown Payment Status'; //if no match is found then the default case is used . 


}
