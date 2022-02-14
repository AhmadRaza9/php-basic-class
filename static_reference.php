<?php

class Cars
{
    static $wheel_count = 8;

    public static function car_detail()
    {
        return self::$wheel_count . "<br>";

    }

}

class Trucks extends Cars
{
    public static function display()
    {
        // echo Cars::car_detail();
        echo parent::car_detail();
    }
}

$wrangler = new Trucks();

$wrangler::display();
