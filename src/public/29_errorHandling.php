<?php

//https://www.php.net/manual/en/errorfunc.constants.php

//Error Handling
#error_reporting(E_ALL); //this will report ALL errors including Warnings.

#error_reporting(E_ALL & ~E_WARNING); //this will now reporting ALL errors but not warnings.


//you can manually trigger errors by calling trigger_error, then passing the msg error argument
#trigger_error('Example Error', E_USER_ERROR);

#echo 1; //this will trigger a fatal error (which is what we want)



function errorHandler(
    int $type,
    string $msg,
    ?string $file =null,
    ?int $line = null
) {

    echo $type . ':' . $msg . 'in' . $file . 'on line ' . $line;

    exit;


} /** this function needs to accept 2 args, 1-error type, 2-error msg ,   */

error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL);

echo $a;