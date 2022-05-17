<?php 
//require, require_once, include, include_once.
//the syntax is the keyword of that statement (eg include) then inside quotes you include the file path.
//include will result in a warning while while require will result in an error and stop the script execution.

require_once 'file.php'; //this is looking in the same directory for the file, once the file is made it will find it and echo it out

$x++;

echo $x . '<br />';

require_once 'file.php';

echo $x . '<br />';
echo 'Hello World';     //this will still print hello work but give an error about no file found
                        //compared to require, which will give a fatal error message and not print anything. 


//if you set it as require_once it was only print it once as its only required
//but seeing as how i have include here as well, it makes it include file.php again
                            

//sometimes you may want to include the content of a file into a string.
//for example we have the partial and we may want to include that partial  into a string
//you can do that by using output control functions





?>