<?php

/** we define name space keyword on top of the file before any code and after declare statmenet  */

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

#use DateTime;
#use Notification\Email;

//use VendorName\Transaction as VendorTransaction;


class Transaction
{
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'decline';


public function __construct()
{
 //Adding the \ means not to load the local namespace but from global
}
}


