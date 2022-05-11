<?php

//functions.

//functions in php are simialr to function in other programming languages.
//its basically a block of code that can take an input do something and return a value.
//php has a lot of built in and ready to use functions.
//but you can also create your own functions.

//you create a function, you use the function key word follow by the  name of the function which should start
//with an underscore or a letter followed by the list of parameters it accepts seperated by commas/
//lastly you put your block of code inside the curly {}

function foo() {
    echo 'Hello World';
}   /*as it stands this will not work as the function HAS NOT been envoked, i.e. it needs to be called. */


   foo();    /* this is now being invoked so the function will run and will print out hello world" */

//instead of priting something directly from the function you could return something from the function and then do something from that value.

//instead of echoinh something out you could use return, now nothing will be printed out but it actually returns a value
//you could assign it to a variable

echo '<br />';

function roo() {
    return "heyo";
}

$x = roo();

echo $x;
echo '<br />';

var_dump(roo());

?>