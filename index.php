<?php
include './config.php';

use Leo\SevenGraus\Bootstrap;

$bootstraper = new Bootstrap();
$bootstraper->addHandler($shapeHandler);
$bootstraper->addHandler($circleHandler);
$bootstraper->addHandler($rectangularHandler);
$bootstraper->server->response('json');
