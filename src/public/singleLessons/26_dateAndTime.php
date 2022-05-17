<?php
/** DATE AND TIME  */

//----------------TIME FUNCTION

#echo time(); //this will print the unix time stamp (in seconds) i.e numbers of seconds since 1970 Jan 1st
date_default_timezone_set('Australia/Adelaide'); //setting the timestamp to Adelaide
$adelaide = time();

$currentTime = time();

echo $currentTime . '<br />';

echo $currentTime + 5 * 24 * 60 * 60 . '<br /> '; //this calculation (5*24*60*60) is converting 5 days into the number of seconds
                                                        //5 days into hours, into mins, into seconds
                                                    //this is giving us the time in 5 days from current time

//we can also subtract time

echo $currentTime - 60 * 60 * 24 . '<br /> ' ; //this gives us the current time yesterday.

//these are semi useful, but they can also be formatted into a date .
//this is done by using a function called Date.
//Date accepts the date format and the optional time step as arguments.


echo date('m/d/Y g:ia') . '<br />'; // the firsr argument you need to pass in the format, 2nd argument is optional and we can pass in the timestamp.
            //note for the second argument. if nothing is passed it it will just use the current time or list of supported formats
        //https://www.php.net/manual/en/datetime.format.php

echo date('m/d/Y g:ia', $currentTime) . '<br />';
?>