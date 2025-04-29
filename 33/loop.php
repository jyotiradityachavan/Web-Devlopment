<?php


$name = "World";
$number = 10;
$is_true = true;


echo "Hello, " . $name . "!\n"; 
echo "The number is: " . $number . "\n";


if ($is_true) {
    echo "The boolean variable is true.\n";
} else {
    echo "The boolean variable is false.\n";
}


echo "Counting from 1 to 5:\n";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "\n";


$colors = array("red", "green", "blue");
echo "The first color is: " . $colors[0] . "\n";

 
function greet($person) {
    return "Greetings, " . $person . "!\n";
}

echo greet("User");

?>