<?php

/** Think of namespaces as virtual directory structures for your classes  */

//
//require __DIR__ . '../../../../vendor/autoload.php';
//require __DIR__ . '../public';
//require __DIR__ . '../../app';
//require __DIR__ . '../../../../public';
//require __DIR__ . '../../../../../src/vendor/autoload.php';

require __DIR__ .'./../../../../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

var_dump($paddleTransaction);


