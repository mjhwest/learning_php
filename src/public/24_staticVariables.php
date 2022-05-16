<?php
/** *Variables Scopes */
//Variable scope simple indicates the boundary where the variable can be accessed,
//We have GLOBAL and LOCAL scope

//For the most part variables in php only have a single scope and it spans within the included and required files as well.


$ta = 5; //this is a global scope and is available throughout the entire script.
        //it will also be available to the scripts that are included after using the include or require statements


include('script1.php'); //the variable x will be available within that file.


//to add keywords to the global scope, you add the keyword 'global' followed by the variable.



//---------------------STATIC VARIABLE
//a static variable is just a regular variable with local scope the difference is that
//the regular variable gets destroyed outside of the scope boundary while the static variable does not get destroyed and it retains its value .


?>