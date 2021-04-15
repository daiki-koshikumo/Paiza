<?php
    $inputLine = fgets(STDIN);
    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $vowelRemove = str_replace($vowels, '', $inputLine);
    echo $vowelRemove;
?>
