<?php

$stopedFloors = getInputLine();

foreach($stopedFloors as $movedNumber => $inputLine){
    $movedElevatorTotal += movedDifference($movedNumber, $stopedFloors, $movedElevatorTotal);
}
echo $movedElevatorTotal;

function getInputLine(){
    for($inputLine = 0; $inputLine = trim(fgets(STDIN)); $inputLine++){
        $stopedFloors[] = $inputLine;
    }
    //標準入力値の先頭は必要ないので除去する
    array_shift($stopedFloors);
    return $stopedFloors;
}

function movedFirstTime($movedElevatorTotal,$stopedFloors, $movedNumber){
    $movedElevatorTotal = $stopedFloors[$movedNumber] - 1;
    return $movedElevatorTotal;
}

function movedDifference($movedNumber, $stopedFloors, $movedElevatorTotal){
    $movedElevatorTotal = $movedNumber === 0? movedFirstTime($movedElevatorTotal, $stopedFloors, $movedNumber): abs($stopedFloors[$movedNumber] - $stopedFloors[$movedNumber-1]);
    return $movedElevatorTotal;
}
