<?php

/** Think of namespaces as virtual directory structures for your classes  */

//
//require_once '../../app/PaymentGateway/Stripe/Transaction.php';
//require_once '../../app/Notification/Email.php';
//require_once '../../app/PaymentGateway/Paddle/CustomerProfile.php';
//require_once '../../app/PaymentGateway/Paddle/Transaction.php';

spl_autoload_register(function($class) {
    $path = __DIR__ . '/../../' . lcfirst(str_replace('\\','/', $class)) . '.php';

    if(file_exists($path)) {
        require $path;
    }
    var_dump($path);
});



use App\PaymentGateway\Paddle\Transaction;


$paddleTransaction = new Transaction();


var_dump($paddleTransaction);



#var_dump(new PaymentGateway\Stripe\Transaction()); //MICHAEL is the namespace
//you can do this instead
#use PaymentGateway\Paddle\Transaction;

#var_dump(new Transaction());