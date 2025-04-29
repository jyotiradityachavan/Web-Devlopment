<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $department = htmlspecialchars($_POST['department']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    
    echo "<h2>Submitted Information</h2>";
    echo "Full Name: " . $name . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "Department: " . $department . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Address: " . $address . "<br>";
} else {
    echo "Invalid request method.";
}
?>