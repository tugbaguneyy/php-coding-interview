<?php
// print prime numbers range 1-10
$primeNumbers=[];

for($i=2;$i<=10;$i++){

    $isPrime=true;

    for($j=2;$j<=sqrt($i);$j++){
        if($i%$j==0){
            $isPrime=false;
            break;
        }
    }

    if($isPrime){
        $primeNumbers[]=$i;
    }
    
}
foreach ($primeNumbers as $p){
    echo $p;
    echo "\n";
}