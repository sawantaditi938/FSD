<?php

// ----------- 1. ARRAY OPERATIONS -----------

// Create arrays
$arr1 = array(5, 2, 9, 1);
$arr2 = array(8, 3);

// Sort array
sort($arr1);   // ascending order
echo "Sorted Array: ";
print_r($arr1);

rsort($arr1);  // descending order
echo "Reverse Sorted Array: ";  
print_r($arr1);

// Search element
$search = 9;
if (in_array($search, $arr1)) {
    echo "Element $search found in array<br>";
} else {
    echo "Element not found<br>";
}

// Merge arrays
$merged = array_merge($arr1, $arr2);
echo "Merged Array: ";
print_r($merged);


// ----------- 2. INPUT VALIDATION (REGEX) -----------

// Name (only letters allowed)
$name = "john123";

if (preg_match("/^[a-zA-Z]+$/", $name)) {
    echo "Valid Name<br>";
} else {
    echo "Invalid Name (only letters allowed)<br>";
}

// Email validation
$email = "test@gmail.com";

if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $email)) {
    echo "Valid Email<br>";
} else {
    echo "Invalid Email<br>";
}


// ----------- 3. STRING MANIPULATION -----------

// Format Name (capitalize first letter)
$name2 = "rahul";
$formattedName = ucfirst($name2);
echo "Formatted Name: " . $formattedName . "<br>";

// Extract domain from email
$email2 = "user@yahoo.com";
$parts = explode("@", $email2);
echo "Email Domain: " . $parts[1] . "<br>";

?>