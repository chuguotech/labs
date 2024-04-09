<?php
//对象克隆Object clone范例
class Car {

    public $brand = '';

    public $color = '';

    public $transmission = '';

    public $speed = 0; 

    public function __construction() {
        $this->brand = 'VW';
        $this->color = 'red';
        $this->transmission = 'automatic';

    }

    public function speedup() {
        $this->speed++;
    }
}

$golf = new Car();
$golf->speedup();

$golf1 = $golf;
$golf1->speedup();
echo 'golf speed:'.$golf->speed;
echo PHP_EOL;
echo 'golf1 speed:'.$golf1->speed;
