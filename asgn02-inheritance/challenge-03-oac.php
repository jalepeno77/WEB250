<?php

class Bicycle {

  //properties
  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  //methods
  protected function name() {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  protected function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218 . ".";
  }

  protected function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  private function wheel_details() {
    return 'It has two wheels';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

//first bike

$mongoose = new Bicycle;
$mongoose->brand = 'Mongoose';
$mongoose->model = 'Eliminator';
$mongoose->year = '1985';
$mongoose->weight_kg = 3.2;

//second bike

$huffy = new Bicycle;
$huffy->brand = 'Huffy';
$huffy->model = 'Trailhead';
$huffy->year = '2003';
$huffy->weight_kg = 4.5;


//display bikes

echo $mongoose->name() . "<br>";
echo $huffy->name() . "<br>";

echo $mongoose->weight_kg . "<br>";
echo $mongoose->weight_lbs() . "<br>";

$huffy->set_weight_lbs(6);
echo $huffy->weight_kg . "<br>";
echo $huffy->weight_lbs() . "<br>";
