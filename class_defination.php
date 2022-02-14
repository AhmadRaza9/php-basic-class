<?php

// class Cars
// {

// }

// $my_classes = get_declared_classes();

// foreach ($my_classes as $class) {
//     echo $class . "<br>";
// }

class Cars
{
    public function grettings()
    {

    }

    public function grettings1()
    {

    }

    public function grettings2()
    {

    }

}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    echo $method . "<br>";
}
