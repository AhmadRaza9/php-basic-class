<?php

class Cars
{
    public $wheel_count = 4;
    public $door_count = 4;
    public function car_detail()
    {
        echo "Hello Students";
    }

}

$bmw = new Cars();
$merced = new Cars();

echo $bmw->wheel_count;
