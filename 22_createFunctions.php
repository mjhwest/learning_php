<?php

//functions.

//functions in php are simialr to function in other programming languages.
//its basically a block of code that can take an input do something and return a value.
//php has a lot of built in and ready to use functions.
//but you can also create your own functions.

//you create a function, you use the function key word follow by the  name of the function which should start
//with an underscore or a letter followed by the list of parameters it accepts seperated by commas/
//lastly you put your block of code inside the curly {}
declare(strict_types=1);
function foo() {
    echo 'Hello World';
}   /*as it stands this will not work as the function HAS NOT been envoked, i.e. it needs to be called. */

   foo();    /* this is now being invoked so the function will run and will print out hello world" */

//instead of priting something directly from the function you could return something from the function and then do something from that value.

//instead of echoinh something out you could use return, now nothing will be printed out but it actually returns a value
//you could assign it to a variable

echo '<br />';
//----------------------------------------------------------
function roo() {
    return "heyo";
}

$x = roo();

echo $x;
echo '<br />';

var_dump(roo());

//in php you can run functions inside of other functions
//because functions in PHP have GLOBAL SCOPE they can be called from outside of the function as long as the first function is called first.

echo '<br />';
echo '<br />';
echo '<br />';

//---------------------------------------------------------------------------------
boo();
yeh();
function boo() {
    echo 'BOO';
    function yeh() {
        echo 'Yehhhh';
    }
}
//this will currently echo out boo, becuase it has been invoked. However, it will not print out Yehhh as it is within the first function .
//if we try to call yeh (before calling boo) we will get an error,
//this is because 'yeh' is inside of boo. so if boo is not being called it cannot run the function, which has yeh inside it.

//note you cannot have functions with the same name.


//--------------Return Types and Strict Types

echo '<br />';
echo '<br />';
echo '<br />';

#declare(strict_types=1); //this must be in the very start of the statment, it will also currently throw an error
//becuse the return is a string but the type hint is that the value will be a string
function grr(): int  { /* by adding : and the expected data type you can 'type hint' i.e : int, this is telling php the expected datatype of an int */
    return 1;
    #return '1'; //you can also make it return a string as we are not using strict types.
    #return []; //this will throw an error as a an array cannot be converted to an int
}

//if you wanted to declare strict types you could. you add it to the top of the page

var_dump(grr());




?>


