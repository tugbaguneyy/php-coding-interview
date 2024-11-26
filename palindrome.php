<?php
$word1="aaassaaa";
$word2="aasa";

function isPalindrome($word){
    $splittedWord=str_split($word);
    $length=count($splittedWord);
    $flag=true;

    for($i=0;$i<$length;$i++){
        if($word[$i]!=$word[$length-$i-1]){
            $flag=false;
            break;
        }
    }
    return $flag;
}

 if(isPalindrome($word1)) echo "palindrome\n"; else echo "not palindrome\n";
 if(isPalindrome($word2)) echo "palindrome\n"; else echo "not palindrome\n";