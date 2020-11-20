<?php
function bubleSort($arr){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr);$j++){
            if($arr[$i] < $arr[$j]){
                $tempt = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tempt;
            }
        }
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
$arr = array(2, 3, 2, 5, 6, 1, -2, 3, 14, 12);
bubleSort($arr);