<?php

class Cars
{
    public $wheel_count = 4;

    public function details($name)
    {
        return "This " . $name . " has " . $this->wheel_count . " Wheels";
    }
}

$bmw = new Cars();

echo $bmw->details('Car');
echo "<br>";

class Trucks extends Cars
{
    public $wheel_count = 8;

}

$tacoma = new Trucks();
echo $tacoma->details('Truck');
