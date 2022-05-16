<?php
//RETURN 
//the return statement can be used to return the control of the progtam execution back to the enviroment it was called from. 
//when a return statement is used witin a function it will stop the execution of that function and will return that given argument. 

function sum(int $x, int $y){
   
    $z = $x + $y; //return end theexecution of the function and returns the value of the exprtession that its given 
    return $z; 
}

$x = sum(5, 10);

echo $x; 

echo '<br />';
echo 'Heyyyya'; 


echo '<br />';
echo '<br />';
echo '<br />';

//DECLARE 

//declare - ticks 
//is just an event that occurs for tickable low level statements in php that are executed by the parser. This means that when php is executing it executs bunch of statements  
//the statements are called tick which is similar to an event BUT NOT ALL STATEMENTS ARE TICKEABLE. 

$x = 3; 
$y = 5; 
$x = $x*$y; //each of these statements cause a tick you could register a custom function to execute on each ticket, 

function onTick() { 
    echo 'Tick <br />'; 
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0; 
$length = 10; 

while ($i < $length) {
    echo $i++ . '<br />';
}


?>