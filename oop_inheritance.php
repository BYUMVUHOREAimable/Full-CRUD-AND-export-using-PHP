<?php
//Define the base class
class Jewellery{
    public $price = 'We have a fixed price of 1000000FRW';

    public function show()
    {
        echo 'This is a private method of a base class';
    }
}

class Necklace extends Jewellery
{
    public function printPrice()
    {
        echo $this -> price;
    }
}

$obj = new Necklace();
//this will throw error
$obj->show();
//this will also throw error
$obj->printPrice();
?>