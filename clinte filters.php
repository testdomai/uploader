<?php
// add_two_numbers.php

// Set response header to JSON
header('Content-Type: application/json');

// Check if both numbers are provided in GET request
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    // Sanitize input to ensure numbers
    $num1 = floatval($_GET['num1']);
    $num2 = floatval($_GET['num2']);
    
    // Calculate the sum
    $sum = $num1 + $num2;
    
    // Return the result as JSON
    echo json_encode([
        'status' => 'success',
        'num1' => $num1,
        'num2' => $num2,
        'sum' => $sum
    ]);
} else {
    // Error response if input is missing
    echo json_encode([
        'status' => 'error',
        'message' => 'Please provide both num1 and num2 parameters in the query string.'
    ]);
}
?>
