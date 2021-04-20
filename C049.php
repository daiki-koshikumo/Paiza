<?php

$inputLine;
$elevatorStoped = [];
$elevatorMoved;

for($inputLine = 0; $inputLine = trim(fgets(STDIN)); $inputLine++){
    $elevatorStoped[] = $inputLine;
}
//標準入力値の先頭は必要ないので除去する
array_shift($elevatorStoped);

for($i = 0; $i < count($elevatorStoped); $i++){
    $elevatorMoved = $elevatorMoved + movedDifference($i, $elevatorStoped, $elevatorMoved);
}
echo $elevatorMoved;

function movedAfterSecondTime($elevatorStoped, $i){
    if($elevatorStoped[$i] < $elevatorStoped[$i-1]){
      $elevatorMoved = $elevatorStoped[$i-1] - $elevatorStoped[$i];
    }else{
      $elevatorMoved = $elevatorStoped[$i] - $elevatorStoped[$i-1];
    }
    return $elevatorMoved;
}

function movedDifference($i, $elevatorStoped, $elevatorMoved){
    if($i === 0){
      $elevatorMoved = $elevatorStoped[0] - 1;
    }else{
      $elevatorMoved = movedAfterSecondTime($elevatorStoped, $i);
    }
    return $elevatorMoved;
}

?>
