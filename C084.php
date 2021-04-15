<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $inputLine = fgets(STDIN);
    $inputLine = str_replace(PHP_EOL, '', $inputLine);
    $countInputLine = mb_strlen($inputLine);
    $decoration = str_repeat("+", $countInputLine + 2);
    echo $decoration."\n"."+".$inputLine."+"."\n".$decoration;
?>
