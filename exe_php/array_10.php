<?php 

//10. Sort the array from question 9 in reverse alphabetical order.

$fruits=array("Apple","Pineapple","Mango","Grapes");
rsort($fruits);

foreach($fruits as $fruit)
{
    print_r($fruit);
    echo "<br>";
}



?>