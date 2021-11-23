<?php
include './vendor/autoload.php';

use Leo\SevenGraus\Service\Handler;
use Leo\SevenGraus\Domain\Circle;
use Leo\SevenGraus\Domain\Shape;
use Leo\SevenGraus\Domain\Rectangle;
use Leo\SevenGraus\Handler\ShapeHandler;

$createResponse = function (ShapeHandler $shape) {
    $response = array();
    $response['area'] = $shape->area();
    $response['id'] = $shape->id();
    $response['type'] = $shape->type();

    return $response;
};

$circleHandler = new Handler();
$circleHandler->method = 'GET';
$circleHandler->endpoint = "/circle";
$circleHandler->handlerFunction = function (array $request) {
    if (array_key_exists('radius', $request)) {
        $circle = new Circle($request['radius']);
        $shape = new ShapeHandler($circle);
        
        $response = array();
        $response['area'] = $shape->area();
        $response['id'] = $shape->id();
        $response['type'] = $shape->type();

        return $response;
    }

    $response = array();
    $response['status_code'] = 404;
    
    return $response;
};

$rectangularHandler = new Handler();
$rectangularHandler->method = 'GET';
$rectangularHandler->endpoint = "/rectangle";
$rectangularHandler->handlerFunction = function (array $request) {
    if (array_key_exists('width', $request) && array_key_exists('height', $request)) {
        $rectangular = new Rectangle($request['width'], $request['height']);
        $shape = new ShapeHandler($rectangular);
        
        $response = array();
        $response['area'] = $shape->area();
        $response['id'] = $shape->id();
        $response['type'] = $shape->type();

        return $response;
    }

    $response = array();
    $response['status_code'] = 404;
    
    return $response;
};

$shapeHandler = new Handler();
$shapeHandler->method = 'GET';
$shapeHandler->endpoint = "/shape";
$shapeHandler->handlerFunction = function (array $request) {
    if (array_key_exists('width', $request) && array_key_exists('height', $request)) {
        $shapeObject = new Shape($request['width'], $request['height']);
        $shape = new ShapeHandler($shapeObject);
        
        $response = array();
        $response['area'] = $shape->area();
        $response['id'] = $shape->id();
        $response['type'] = $shape->type();

        return $response;
    }

    $response = array();
    $response['status_code'] = 404;
    
    return $response;
};
