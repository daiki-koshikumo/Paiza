<?php
    $inputLine = fgets(STDIN);
    $inputLineAdjust = str_replace(PHP_EOL, '', $inputLine);
    $countInputLine = mb_strlen($inputLineAdjust);
    $decoration = str_repeat("+", $countInputLine + 2);
    echo "$decoration\n+$inputLineAdjust+\n$decoration";
?>
