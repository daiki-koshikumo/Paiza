<?php
    $inputLine = fgets(STDIN);
    $vowelRemove = strtr($inputLine, array('a' => '', 'e' => '', 'i' => '', 'o' => '', 'u' => '', 'A' => '', 'E' => '', 'I' => '', 'O' => '', 'U' => ''));
    echo $vowelRemove;
?>
