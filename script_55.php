<?php
$myArray = array(
    "first" => "John",
    "second" => "Doe",
    "third" => "Smith",
    "fourth" => "Johnson"
);

$firstKey = array_key_first($myArray);
$lastKey = array_key_last($myArray);

echo "First Key: " . $firstKey . "\n";
echo "Last Key: " . $lastKey . "\n";
?>

