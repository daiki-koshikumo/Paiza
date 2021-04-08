<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $Strtr = strtr($input_line, array('a' => '', 'e' => '', 'i' => '', 'o' => '', 'u' => '', 'A' => '', 'E' => '', 'I' => '', 'O' => '', 'U' => ''));
    echo "$Strtr";
?>
