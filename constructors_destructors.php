<?php

class Cars
{
    public $wheel_count = 4;
    static $door_count = 4;

    public function __construct()
    {
        echo $this->wheel_count . "<br>";
        echo self::$door_count++ . "<br>";
    }

    // public function __destruct()
    // {
    //     echo $this->wheel_count . "<br>";
    //     echo self::$door_count-- . "<br>";
    // }

}

$bmw = new Cars();
$dodge = new Cars();
$mercedes = new Cars();
