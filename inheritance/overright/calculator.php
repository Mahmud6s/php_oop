<?php

class Calculator {

    final public function CalculatePercentages($part, $whole){ //final kore dile inherite kora jbe na
        return ($part / $whole) * 100;
    }

}

class Calculate extends Calculator {
    
    public function override($part, $whole){
        return $part / ($whole * 100);
    }

}

$part = 10;
$whole = 5;

$calc = new Calculate();
$percentage = $calc->CalculatePercentages($part, $whole);
$calculation = $calc->override($part, $whole);

echo "Percentage: $percentage%";
echo "Calculation: $calculation";

