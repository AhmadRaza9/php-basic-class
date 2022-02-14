<?php

class Cars
{
    public $wheel_count = 4;
    private $door_count = 4; // only available in this class
    protected $seat_count = 5; // availables in subclasses and inheritance

    public function car_detail()
    {
        echo $this->wheel_count . "<br>";
        echo $this->door_count . "<br>";
        echo $this->seat_count . "<br>";

    }

}

$bmw = new Cars();

// echo $bmw->wheel_count . "<br>";
// echo $bmw->door_count . "<br>";
// echo $bmw->seat_count . "<br>";

$bmw->car_detail();
