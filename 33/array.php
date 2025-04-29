<?php
    $Seasons = array("Summer", "winter", "Rainy","Spring");
    echo "Array:$Seasons[0],$Seasons[1],$Seasons[2],$Seasons[3]";
    echo "<br><br>";
    foreach($Seasons as $s)
    {
        echo$s."<br><br>";
    }
    echo "<br><br>";

    echo "count of Seasons:".count($Seasons);
    echo "<br><br>";
    echo "<br><br>";

    sort($Seasons);
    foreach($Seasons as $s)
    {
        echo"sorted array Alphabetical:".$s."<br><br>";
    }
    echo "<br><br>";

    $reverseseasons=array_reverse($Seasons);
    foreach($reverseseasons as $r)
    {
        echo$r."<br><br>";
    }
    echo "<br><br>";

    $key=array_search("Spring",$Seasons);
    echo$key;
?>
