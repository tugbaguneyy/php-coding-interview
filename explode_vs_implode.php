<?php

$value= "Merhaba Dünya Php Öğreniyorum";
echo $value;
$words= explode(" ", $value);
echo $words[0]; 
echo $words[1]; 
echo $words[2]; 
echo $words[3];

$value2= array('Merhaba', 'Dünya', 'Php','Öğreniyorum');
$stringvalue= implode(" ", $value2);
echo $stringvalue; 
?>