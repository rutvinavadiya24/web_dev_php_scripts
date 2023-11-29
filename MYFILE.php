<?php
      
   $file=fopen("atmiya.txt","r");
 //  echo $file;
   $mycontentread=fread($file,filesize("atmiya.txt"));
   echo $mycontentread;
?>