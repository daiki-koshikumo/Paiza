<?php
    $inputLine = fgets(STDIN);
    $firstPlace = substr_count($inputLine, "/");
    $tenthPlace = 10 * substr_count($inputLine, "<");
    $calculationResult = $firstPlace + $tenthPlace;
    echo "$calculationResult";
?>
