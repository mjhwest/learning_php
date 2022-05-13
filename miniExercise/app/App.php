<?php
/** THis is the main file where most of our code will go i.e important functions  */
declare(strict_types = 1);

//Your Code

/** FIRST STEP IS TO MAKE A FUNCTION THAT CAN READ THE TRANSACTION FILES from the directory */

function getTransactionFiles(string $dirPath): array  //this function will return an array
{
    $files = []; //set files to an empty array
     foreach(scandir($dirPath) as $file) {
         if (is_dir($file)) {
             continue ;
         }

         $files [] = $dirPath . $file; //the files now contain the correct path to the file
         var_dump($file);
     }
    return $files;
}

/** THE SECOND STEP  */
//The next thing we need to do is read each of these files and extract transactions from these files

function getTransactions(string $fileName): array //this is going to accept the file name or the file path and will return an array
{
    if (! file_exists($fileName)) {
// First thing we need to do is check if this file actually exists because if it dosent and we try to perfrom some actions it will throw an error. !
        trigger_error('File"' . $fileName . '"does not exist' . E_USER_ERROR);
    }

//next we need to open this file
    $file = fopen($fileName, 'r'); //the r  here means for reading

    fgetcsv($file); //by adding this line we got rid title stuff and only keep the actual csv file .

//next we need to create a transactions array that will read the transactions line by line and put it into the transactions
    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        #$transactions[] = $transaction;
        //insert extractTransaction function
        $transactions[] = extractTransaction($transaction);
    }

    return $transactions;
}

/** PART 3   function to extract details from transcation list  */

function extractTransaction(array $transactionRow): array //it will return an array
        //the extractTransaction function can now be used directly
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    //need to make all the amount details the same
    $amount = (float) str_replace(['$', ','], '', $amount); //this is replacing $ and , with empty string and amount
    // this above line also needs to be a float, done by adding (float) to start

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount //we can extract this data from the transactionRow array, this can be done by using array deconstructioning.
    ];
}

/** Create another function to calculate the totals  */

function calculateTotals(array $transactions): array //this function accepts 'transactions' and will return an array
{
    
}