<?php
function testStatic() {
    static $staticVar = 0; 
    $staticVar++; 
    echo "Static variable value: " . $staticVar . "<br>";
}

testStatic(); 
testStatic(); 
testStatic(); 
?>