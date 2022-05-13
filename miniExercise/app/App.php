<?php
/** THis is the main file where most of our code will go i.e important functions  */
declare(strict_types = 1);

//Your Code

/** FIRST STEP IS TO MAKE A FUNCTION THAT CAN READ THE TRANSACTION FILES from the directory */

function getTransactionFiles(): array  //this function will return an array
{
    $files = []; //set files to an empty array
     foreach(scandir(FILES_PATH) as $file) {
         if (is_dir($file)) {
             continue ;
         }

         $files [] = $file;
         var_dump($file);
     }               //use  scandir function to scan the directory
    return $files;
}

