<?php
//r,w,a,
   $file=fopen("atmiya.txt","a");
   $mynewcontent="this my content";
   fwrite($file,$mynewcontent);
   fclose($file);
?>
