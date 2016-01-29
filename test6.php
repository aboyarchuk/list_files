<?php

$file1 = "/home/alina/papka/file1.txt";
$file3 = "/home/alina/papka/file2.txt";
$file2 = "/home/alina/papka/file3.txt";

function compare_two_files($file1,$file2, & $result){
   if (filesize($file1) !== filesize($file2))
      return false;
   
   $f1h = fopen($file1, 'rb');
   $f2h = fopen($file2, 'rb');
   $size = filesize($file1);
   $result = true;
   while(!feof($f1h)){
         if(fread($f1h, $size) != fread($f2h, $size)){
            $result = false;
            break;
         }
   }
   fclose($f1h);
   fclose($f2h);
   return $result;
}
compare_two_files("/home/alina/papka/file1.txt"  ,  "/home/alina/papka/file2.txt" , $result);
echo $result . "\n";

?>