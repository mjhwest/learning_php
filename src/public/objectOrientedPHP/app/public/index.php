<?php

/** Think of namespaces as virtual directory structures for your classes  */

use App\PaymentGateway\Paddle\Transaction;






#var_dump(new PaymentGateway\Stripe\Transaction()); //MICHAEL is the namespace
//you can do this instead
#use PaymentGateway\Paddle\Transaction;

#var_dump(new Transaction());