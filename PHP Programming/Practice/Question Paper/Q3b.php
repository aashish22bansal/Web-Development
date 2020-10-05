<?php
    $arr = array(1,2,3,4,5,6);
    foreach($arr as $n => $val){
        echo "$n = $val<br>";
    }
    echo "Deleting the array.<br>";
    echo sizeof($arr);
    echo "<br>";
    foreach($arr as $n){
        echo $n;
        unset($arr);
        echo "<br>";
    }
    echo "The reamining array is: ";
    print_r($arr);
?>