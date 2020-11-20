<?php
function seclectionSort($arr){
    for($i=0;$i< count($arr); $i++){
        $min = $i;
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        if($min != $i){
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min]= $temp;
        }
    }
    return $arr;
}
$arr = array(1,54,8,98,5,0,33);
echo "<pre>";
print_r(seclectionSort($arr));