<?php
class elevetor{
    public function result(){
        foreach($stopedFloors = $this->getInputLine() as $movedNumber => $movedTimes){
        $movedElevatorTotal += $this->movedDifference($movedNumber, $stopedFloors, $movedElevatorTotal);
        }
    echo $movedElevatorTotal;
    }
    
    public function getInputLine(){
        for($movedTimes = 0; $movedTimes = trim(fgets(STDIN)); $movedTimes++){
            $stopedFloors[] = $movedTimes;
        }
        array_shift($stopedFloors);
        return $stopedFloors;
    }
    
    public function movedFirstTime($movedElevatorTotal,$stopedFloors, $movedNumber){
        $movedElevatorTotal = $stopedFloors[$movedNumber] - 1;
        return $movedElevatorTotal;
    }
    
    function movedDifference($movedNumber, $stopedFloors, $movedElevatorTotal){
        $movedElevatorTotal = $movedNumber === 0? $this->movedFirstTime($movedElevatorTotal, $stopedFloors, $movedNumber)
        : abs($stopedFloors[$movedNumber] - $stopedFloors[$movedNumber-1]);
        return $movedElevatorTotal;
    }
    
}

$result = new elevetor;
echo $result->result();
