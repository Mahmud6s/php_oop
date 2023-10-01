<?php

class access{
    public $name="access";
    protected $age=9;
    private $password=7845;
}


class FileReader1{

    public $data="FileReader";
}

$a=new FileReader1();
echo $a->data;

echo "<br>";


class FileReader2{
  
    // protected $data="FileReader";
    private $data="FileReader";

    public function getData(){
        return $this->data;
    }
}

$a=new FileReader2();
echo $a->getData();
