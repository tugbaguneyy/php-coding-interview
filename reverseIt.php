<?php
$text = "Hello World!";

$splittedText = str_split($text);
$length = count($splittedText);

for ($i = 0; $i < $length / 2; $i++) {
    $temp = $splittedText[$i];
    $splittedText[$i] = $splittedText[$length - $i - 1];
    $splittedText[$length - $i - 1] = $temp;
}

foreach ($splittedText as $s) {
    echo $s;
}
