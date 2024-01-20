<?php

class Car
{
    public $comp;
    private $color = 'beige';
    public $hasSunRoof = true;

    public function hello()
    {
        return $this->comp." beep";
    }

    public function show_color()
    {
        echo $this->color;
    }
}

$bmw = new Car();
$mercedes = new Car();
//$bmw->color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";

//echo $bmw->color; // beige
echo "\n";
echo $bmw->comp;
echo "\n";
//echo $mercedes->color; //beige
echo "\n";
echo $mercedes->comp;
echo "\n";
echo $bmw->hello();
echo "\n";
echo $mercedes->hello();
echo "\n";
$bmw->show_color();
echo "\n";
$mercedes->show_color();