<?php

declare(strict_types=1);
require_once './transaction.php';

//CLASSES AND OBJECTS

//a class is like a blueprint and an object is something that you build from that blueprint

//object is a PHP datatype
//PHP has a generic class implementation called STD class and you can use to create generic objects or you could cast
//your variables that are often and other


//calling the variable 'transaction and to create an object we need to use NEW keyword followed by the class name
//in this instance the class name is called "Transaction" as per transaction.php
$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);
    #->getAmount();

#$transaction2 = (new Transaction(200, 'Transaction 2'))
    #->addTax(8)
    #->applyDiscount(15);
    #->getAmount();
/** this is now chained together so can accept multiple methods  */
//the arguments from index.php, ie amount and description 15 'Transaction'.

//$transaction->amount =  15;  /** now it transaction is set to 15  */

$amount = $transaction->getAmount();

$transaction = null;

var_dump($amount);




/** DESTRUCTOR */
//is another magic method that needs to be defined, it starts with two underscore (__)


?>