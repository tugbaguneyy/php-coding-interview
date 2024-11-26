<?php
function isAnagram($word1, $word2) {
    // Harf dizilerini oluşturuyoruz
    $splittedWord1 = str_split($word1);
    $splittedWord2 = str_split($word2);

    // İki kelimenin uzunluğu aynı değilse anagram olamazlar
    if (count($splittedWord1) != count($splittedWord2)) {
        return false;
    }

    // Harfleri alfabetik sıraya göre sıralıyoruz
    sort($splittedWord1);
    sort($splittedWord2);

    // Sıralanmış halleri karşılaştırıyoruz
    return $splittedWord1 === $splittedWord2;
}

$word1 = "patik";
$word2 = "kitap";

if (isAnagram($word1, $word2)) {
    echo "Anagramdır";
} else {
    echo "Anagram değildir";
}
