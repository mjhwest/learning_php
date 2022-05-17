<?php

/** Think of namespaces as virtual directory structures for your classes  */

require_once './PaymentGateway/Stripe /Transaction.php';
require_once './PaymentGateway/Paddle/Transaction.php';
require_once './PaymentGateway/Paddle/DateTime.php';
require_once './PaymentGateway/Paddle/CustomerProfile.php';
require_once './Notification/Email.php';


use PaymentGateway\Paddle\CustomerProfile;
use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();


var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);



#var_dump(new PaymentGateway\Stripe\Transaction()); //MICHAEL is the namespace
//you can do this instead
#use PaymentGateway\Paddle\Transaction;

#var_dump(new Transaction());