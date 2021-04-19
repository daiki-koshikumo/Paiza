<?php

$inputLine = trim(fgets(STDIN));
$inputLineArray = [];

for ($inputLine = 0; $inputLine = trim(fgets(STDIN)); $inputLine++) {
    $inputLineArray[] = $inputLine;
}

for($i = 0; $i < count($inputLineArray); $i++){
    if($i === 0){
      $elevatorMoved = 0;
    }elseif($i === 1){
      $goUpDown = $inputLineArray[1] - 1;
    }else{
      if($inputLineArray[$i] < $inputLineArray[$i-1]){
        $goUpDown = $inputLineArray[$i-1] - $inputLineArray[$i];
      }else{
        $goUpDown= $inputLineArray[$i] - $inputLineArray[$i-1];
      }
    }
    $elevatorMoved = $elevatorMoved + $goUpDown; 
}
echo $elevatorMoved;
?>
