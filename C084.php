<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $input_line = str_replace(PHP_EOL, '', $input_line);
    $countInput_line = mb_strlen($input_line);
    $decoration = str_repeat("+", $countInput_line + 2);
    echo "$decoration\n";
    echo "+"."$input_line"."+"."\n";
    echo "$decoration";
?>
