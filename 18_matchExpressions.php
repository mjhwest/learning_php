<?php 
//Match is very similar to switch statement, 
//Match was recently introduced in php8 and will not working in previous versions. 

$paymentStatus = 1; 

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;

    case 2: 
    case 3: 
        echo 'Payment Decline'; 
        break;
    
    case 0;
    echo 'Pedning Payment'; 
    break; 

    default: 
    echo 'Unknown Payment Status'; 
}

echo '<br />';

//---------------match is below, switch is above 
$paymentStatusDisplay = match ($paymentStatus) {
1 => print 'Paid',  
2,3  => print 'Payment Declined', //using the comma between 2,3 is the same as case 2 and 3 (line 12 and 13)
0 => print 'Pending Payment',
                                        //provide key value pairs within {}. Where key is the sinhle conditional expression and value is the return expression.  
};

echo $paymentStatusDisplay;

//match expression actually is an expression and it evaluates to a value and therefore can be assigned to a variable. 
// a difference between switch and match is with match you DO NOT need to have the break. 


?>