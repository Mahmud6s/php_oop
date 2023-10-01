<?php


class Father{
    public function print10(){
        for($i=0; $i<=10; $i++){
            echo $i ." ";
        }
    }
}

class Son extends Father{
    public function print10(){
        for($i=0; $i<=15; $i++){
            echo $i ." ";
        }
    }
}


$son = new Son();
$son->print10();

echo "<br>";

class father2{
    public function print10(){
        for($i=0; $i<=10; $i++){
            echo $i." ";
        }
    }
}
class son2 extends father2{
    public function print(){
        parent::print10();
    }
}
$nson = new son2();
$nson->print();