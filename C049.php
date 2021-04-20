<?php

$inputLine;
$elevatorStoped = [];
$elevatorMoved;

for($inputLine = 0; $inputLine = trim(fgets(STDIN)); $inputLine++){
    $elevatorStoped[] = $inputLine;
}

for($i = 0; $i < count($elevatorStoped); $i++){
    $elevatorMoved = $elevatorMoved + movedDifference($i, $elevatorStoped, $goUpDown);
}
echo $elevatorMoved;

function movedAfterThirdTime($elevatorStoped, $i){
    if($elevatorStoped[$i] < $elevatorStoped[$i-1]){
      $goUpDown = $elevatorStoped[$i-1] - $elevatorStoped[$i];
    }else{
      $goUpDown= $elevatorStoped[$i] - $elevatorStoped[$i-1];
    }
    return $goUpDown;
}

function movedDifference($i, $elevatorStoped, $goUpDown){
    if($i === 0){
      $elevatorMoved = 0;
    }elseif($i === 1){
      $goUpDown = $elevatorStoped[1] - 1;
    }else{
      $goUpDown = movedAfterThirdTime($elevatorStoped, $i);
    }
    return $goUpDown;
}

?>

