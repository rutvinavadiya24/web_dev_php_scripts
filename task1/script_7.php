<?php
$x=15;
$y=18;
echo "<br>"."before swapping";
echo "<br>"."value of first number is =".$x;
echo "<br>"."value of second number is=".$y;
$temp=0;
$temp=$x;
$x=$y;
$y=$temp;
echo "<br>"."after swapping";
echo "<br>"."value of first number is=".$x;
echo "<br>"."value of second number is=".$y;
?>