<?php

class MyClass{
    public static function ShakibKhan(){
        echo "my name is khan";
}
}

// $obj = new MyClass();

// $obj->ShakibKhan();
MyClass::ShakibKhan();
// 2 vhabe e call kora jabe

echo "<br>";

class hero{
    public static $name="Khan";

    public static function ShakibKhan(){
        echo self::$name;
    }
}
$cinema = new hero();
$cinema->ShakibKhan();
// hero::ShakibKhan();