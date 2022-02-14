<?php

class Cars
{
    public $wheel_count = 4;
    public $door_count = 4;

    public function car_detail()
    {
        return "This car has " . $this->wheel_count . " Wheels";
    }

}

$bmw = new Cars();
$wrangler = new Cars();

echo $bmw->car_detail();
