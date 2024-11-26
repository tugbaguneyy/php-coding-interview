<?php
// 0 1 1 2 3 5 8 13 21 ....

$count=10;
$array=[0,1];

for($i=2;$i<$count;$i++){
    $array[$i]=$array[$i-1]+$array[$i-2];
}

foreach($array as $a){
    echo $a;
    echo "\n";
}