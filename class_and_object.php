<?php

class User{
    public $name ="PHP User";
    public $age = 18;

    public function addTwo($num1,$bum2){
        echo $num1 + $bum2;
    }
}

$user = new User();
$user ->addTwo(3,5);
echo "<br>";
echo $user->name;

echo "<br>";