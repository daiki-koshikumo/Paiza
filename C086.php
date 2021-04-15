<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $inputLine = fgets(STDIN);
    $vowelRemove = strtr($inputLine, array('a' => '', 'e' => '', 'i' => '', 'o' => '', 'u' => '', 'A' => '', 'E' => '', 'I' => '', 'O' => '', 'U' => ''));
    echo $vowelRemove;
?>
