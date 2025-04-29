<?php
class MyClass {
    public $property;

    
    public function __construct($value) {
        $this->property = $value;
        echo "Constructor called. Property value is: " . $this->property . "\\n";
    }
}


$obj = new MyClass("Hello, World!");
?>