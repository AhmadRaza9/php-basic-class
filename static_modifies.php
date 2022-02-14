<?php

class Cars
{
    public $wheel_count = 4;
    private $door_count = 4;
    protected $seat_count = 5;
    static $engine_number = 5;

    public static function car_detail()
    {
        echo Cars::$engine_number;
    }

}

// $bmw = new Cars();

// echo $bmw->wheel_count . "<br>";
// echo $bmw->door_count . "<br>";
// echo $bmw->seat_count . "<br>";

echo Cars::$engine_number;
Cars::car_detail();
