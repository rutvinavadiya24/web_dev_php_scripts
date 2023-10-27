<?php
// Multidimensional array example
$data = [
    ['id' => 1, 'name' => 'John', 'age' => 25],
    ['id' => 2, 'name' => 'Jane', 'age' => 30],
    ['id' => 3, 'name' => 'John', 'age' => 35],
    ['id' => 4, 'name' => 'Jane', 'age' => 40],
    ['id' => 5, 'name' => 'John', 'age' => 45]
];

// Function to extract a specific column using array_unique()
function extractColumn($array, $columnName)
{
    $column = array_column($array, $columnName); // Extract the specified column
    $uniqueColumn = array_unique($column); // Remove duplicates

    return $uniqueColumn;
}

// Usage example
$uniqueNames = extractColumn($data, 'name');
print_r($uniqueNames);
?>