<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $inputLine = fgets(STDIN);
    $inputLineAdjust = str_replace(PHP_EOL, '', $inputLine);
    $countInputLine = mb_strlen($inputLineAdjust);
    $decoration = str_repeat("+", $countInputLine + 2);
    echo "$decoration\n+$inputLineAdjust+\n$decoration";
?>
