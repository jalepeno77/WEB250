<?php

class Ships {

  public $name;
  public $color;
  public $occupancy;
  public $speed;

  public function info() {
    return $this->name . ", " . $this->color . ", " . $this->occupancy . ", " . $this->speed;
  }
}

class UnderwaterShips extends Ships {
public $torpedo;
public $oxygenTanks;
private function specs() {
  return $this->torpedo . ", " . $this->oxygenTanks;
  }
}

class BattleShips extends Ships {
private $aircrafts;
private $controlTower;
private function cap() {
  return $this->aircrafts . ", " . $this->controlTower;
  }
}

$a = new Ships;
$a->name = 'Shrimp Boat';
$a->color = 'White';
$a->occupancy = '5';
$a->speed = '10 Knots';

$l = new BattleShips;
$l->name = 'Carrier';
$l->color = 'Grey';
$l->occupancy = 500;
$l->speed = '35 Knots';

$s = new UnderwaterShips ;
$s->name = 'Submarine';
$s->color = 'Black';
$s->occupancy = 50;
$s->speed = "20 Knots";
$s->torpedo = 20;
$s->oxygenTanks = 50 . '<br>';

echo $l->info() . '<br>';
echo $s->info() . '<br>';
echo $s->specs();

echo get_parent_class($l) . '<br>';
echo get_parent_class($s) . '<br>';
