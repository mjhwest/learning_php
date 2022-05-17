<!-- constants are values that cannot be changed once they are defined  -->


<!-- 

2 ways to define constants, 
1 - use a function called define    which accepts to params, name and value 

-->
<?php 

// define('STATUS_PAID', 'paid');
// echo STATUS_PAID;

// // you can check if a constant has been defined 
// //if it is defined it will print '1' if not defined will not print 
// echo defined ('STATUS_PAID'); 


// //this will display nothing as nothing has been defined .
// echo defined ('STATUS_VOID');







//the 2nd way to define constants is by using the const keyword 

const STATUS_PAID = 'paid';

echo STATUS_PAID; 

?> 
