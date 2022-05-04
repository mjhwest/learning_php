<?php 

//-----------------ERROR CONTROL OPERATORS (@)
//if you add this to an expression it will supress any erros from that expression and the erros that it supresses mainly depend on how you have error handling configured in PHP. 
$wq = @file('foo.txt'); /*this does not exisit so will give an error */ 
                      /* if you add an @ infront of it, the error will go */
                    //this is not recommended 





//-----------------INCREMENT / DECREMENT OPERATORS (++, --)









?> 