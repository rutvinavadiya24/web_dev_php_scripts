<?php

      $num1=20;
      $num2=15;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }
?>
<br>
<br>
<?php
      $numbers=array(15,18,22,56,19,5);
      echo max($numbers);
?>