<?php
    $inputLine = fgets(STDIN);
    $leetAlphabet = array('A', 'E', 'G', 'I', 'O', 'S', 'Z');
    $leetNumber = array('4', '3', '6', '1', '0', '5', '2');
    $leet = str_replace($leetAlphabet, $leetNumber, $inputLine);
    echo $leet;
?>
