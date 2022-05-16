<?php

declare(strict_types=1);

class Transaction //class must begin with a keyword, followed by classname which should start with a letter or _
                    //we then include {} to enclose the class definition
                    //you dont have to call your class the file name but it is very common
{
    /** we need to define visablitiy of the property to either public, private or protected
     *these are also called access modifiers
     *they should be added to both properties and methods
     */
private float $amount;
private string  $description; /** if the ids are underlined, it is suggested we should type hint them  */
    //adding float and string is what type hinting it, it

    /** PUBLIC - means it is accessible to everyone interacting with the object, even outside the class  */
    /** PRIVATE- means this property is only available and accessible within the class itself  */

//When properties are publicy available you are able to change their values


    /** CONSTRUCTOR METHOD */
//Constructor method is a special function also know as a magic method that will be called whenever a new instance of the class is created

//it starts with a double __      and when this is typed an auto list is compiled.

/** this is like a regular method, the difference is this will get called every time a new object is created
 *it can accept arguments
 */
public function __construct(float $amount, string $description ) //now we can assign these values to the properties
    //to access the properties of the object or the class within the class itself we need to use a varialbe called THIS
{
    $this->amount = $amount;      //this variable refers to the calling object / the instance from which the method was called
    $this->description = $description;
}

public function addTax(float $rate): Transaction
    {
    $this->amount += $this->amount * $rate / 100;
    return $this;
    }

public function applyDiscount (float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate /100;
        return $this;
    }

public function getAmount(): float
    {
        return $this->amount;
    }

    /** Destruct method is called whenever there is no more reference available to the object or when the object is destroyed  */
public function __destruct()
{
    echo 'Destruct' . $this->description . '<br/>';
}

}



