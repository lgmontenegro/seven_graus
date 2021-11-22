<?php
require_once "vendor/autoload.php";

use Leo\SevenGraus\Domain\Rectangle;
use Leo\SevenGraus\Domain\Circle;

$teste = new Rectangle(3.0, 3.0);
$teste2 = $teste->copy();
$teste3 = new Circle(1.0);

var_dump($teste->area());
var_dump($teste->id());
var_dump($teste2->area());
var_dump($teste3->area());
