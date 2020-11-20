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
$arr = array(8,4,6,3,9,23,0);
bubleSort($arr);