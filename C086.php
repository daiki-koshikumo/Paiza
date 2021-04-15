<?php
    $inputLine = fgets(STDIN);
    $vowel = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $vowelRemove = str_replace($vowel, '', $inputLine);
    echo $vowelRemove;
?>
