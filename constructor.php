<?php

class mahmud{
    public function __construct($num1,$num2)
    {
        echo $num1+$num2;
    }
}
new Mahmud(3,2);
echo "<br>";

class car{

    public $name;
    public $model;
    public $year;

    public function __construct($nameValue,$modelValue,$yearValue){
        $this->name = $nameValue;
        $this->model = $modelValue;
        $this->year = $yearValue;
    }

    public function MyCar(){
        echo "My car name is $this->name, and model is $this->model and year is $this->year";
    }
}

$car1 = new car("Honda","Accord","2019");
$car1->MyCar();

echo "<br>";

$car2 = new car("Toyota","Corolla","2020");
$car2->MyCar();