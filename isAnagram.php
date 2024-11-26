<?php
function isAnagram($word1, $word2) {
    // create letter arrays
    $splittedWord1 = str_split($word1);
    $splittedWord2 = str_split($word2);

    // if two words are not the same length, they cannot be anagrams
    if (count($splittedWord1) != count($splittedWord2)) {
        return false;
    }

    // sort the letters in alphabetical order
    sort($splittedWord1);
    sort($splittedWord2);

    // compare the sorted states
    return $splittedWord1 === $splittedWord2;
}

$word1 = "patik";
$word2 = "kitap";

if (isAnagram($word1, $word2)) {
    echo "It is an anagram";
} else {
    echo "It is not an anagram";
}
