<?php
    $arr = array(1,2,3,4,5,6);
    foreach($arr as $n => $val){
        echo "$n = $val<br>";
    }
    array_push($arr,6);
    array_push($arr,7);
    array_push($arr,8);
    print_r($arr);
?>