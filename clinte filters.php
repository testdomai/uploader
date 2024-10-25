<?php
// add_static_numbers.php

// Set response header to JSON
header('Content-Type: application/json');

// Static numbers
$num1 = 5;
$num2 = 10;

// Calculate the sum
$sum = $num1 + $num2;

// Return the result as JSON
echo json_encode([
    'status' => 'success',
    'num1' => $num1,
    'num2' => $num2,
    'sum' => $sum
]);
?>
