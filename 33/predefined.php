<?php
function hello()
{
    $x="Hello World";
    echo$x."<br>The Function name is:".__function__;
}
hello();
echo "<br><br>";

$y="PHP";
echo$y."<br>The current line no. is:".__line__;
echo "<br><br>";

echo$y."<br>current php script name is:".__file__;
echo "<br><br>";

echo$y."<br>Directory of current php script name is:".__DIR__;

?>