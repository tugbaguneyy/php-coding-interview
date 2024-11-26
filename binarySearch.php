<?php

function binarySearch($arr,$target){
    $left=0;
    $right=count($arr)-1;

    while($left<=$right){
        $mid=floor(($left+$right)/2);

        if($target==$arr[$mid])
        {
            return $mid;
        }

        if($arr[$mid]>$target){
            $right=$mid-1;
        }

        else{
            $left=$mid+1;
        }
    }
    return -1;
}

$array=[1,5,15,25,30,32,45];
$target=32;

if(binarySearch($array,$target)!=-1){
    echo "Target index ";
    echo binarySearch($array,$target);
}
else{
    echo "not present";
}
