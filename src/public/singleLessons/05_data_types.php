<!-- //type and type castinhg 

php is dynamically typed or also knows as weekly tpyed language where you are not required 
to define the type of your variable. Also the type of the variable can change after it has been defined. 
Dynamically typed language means that the type checking happens at run time while statically typed langauge
means that type checking happens at compile time. 

For example java, C++, and C Sharp are the statically type languages because PHP allows such type system it
is more flexible but that flexibilty comes at a price of performace and can sometimes result in unexpected
bugs. 

However, php has improbed its type system a lot in latest versions, it even supports strict types.  -->
<!-- 
/ PHP supports 10 primitive types which are group by 
4 scalar types */  -->

<?php
#bool - true / false 
$completed = true;

#int - 1,2,3 0, -5 (no decimal)
$score = 54;
#float - numbers with decimans
$price = .56;

#string - characters inside '' or ""
$greeting = 'hello michael';

echo $completed . '<br />';
echo $score . '<br />';
echo $price . '<br />';
echo $greeting . '<br />';


#you can use the function 'gettype' to find out what type of variable you are using 
//  echo gettype($greeting); 

#we can also use var_dump which prints out all know info 
/*var_dump($completed) */


// 4 compound types 
#array
$companies = [1, 2, 3, 0.5, -9.2, 'A', 'nb', true];
print_r($companies)


#object
#callable
#iterable


// 2 special types 
#resource
#null - no value

?>