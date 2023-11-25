<?php

declare(strict_types=1);

class Logger
{
   function __construct()
   {
   }

   static function info($message)
   {
      $date = date("Y-m-d: h:i:s");
      $file = fopen("./test.txt", "a+");
      $info = "[INFO]". "[" . $date . "]" . $message . PHP_EOL;
      fwrite($file, $info);
      fclose($file);
   }
}

// $errorMessage = new Logger();

// $errorMessage->info("test2");
// $errorMessage->info("test3");
// $errorMessage->info("test4");

Logger::info("test5");
