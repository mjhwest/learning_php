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

//next we need to create a transactions array that will read the transactions line by line and put it into the transactions
    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = $transaction;
    }

    return $transactions;
}