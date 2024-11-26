<?php
$points=[
    [1,2],
    [4,6],
    [7,8],
    [3,5]
];

function euclideanDistance($point1, $point2) {
    return sqrt(pow(($point2[0] - $point1[0]), 2) + pow(($point2[1] - $point1[1]), 2));
}

$distances=[];
for($i=0;$i<count($points);$i++){
    for($j=$i+1;$j<count($points);$j++){
        $distance=euclideanDistance($points[$i],$points[$j]);
        $distances[]=$distance;
    }
}
// foreach($distances as $d){
//  echo $d;
//  echo "  ";
// }
 $minDistance=min($distances);
 echo "Minimum mesafe:";
 echo $minDistance;