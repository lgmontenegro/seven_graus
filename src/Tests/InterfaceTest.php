<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Tests;

use PHPUnit\Framework\TestCase;
use Leo\SevenGraus\Domain\Shape;
use Leo\SevenGraus\Domain\Rectangle;
use Leo\SevenGraus\Domain\Circle;
use Leo\SevenGraus\Domain\Interfaces\ShapeInterface;

class InterfaceTest extends TestCase
{
    /**
     * @param ShapeInterface $shapeObj
     * @return float
     */
    private function usingInterfaceShapeForArea(ShapeInterface $shapeObj): float
    {
        return $shapeObj->area();
    }

    /**
     * @param ShapeInterface $shapeObj
     * @return string
     */
    private function usingInterfaceShapeForID(ShapeInterface $shapeObj): string
    {
        return $shapeObj->id();
    }

    /**
     * @param ShapeInterface $shapeObj
     * @return void
     */
    private function usingInterfaceShapeForCopy(ShapeInterface $shapeObj)
    {
        return $shapeObj->copy();
    }

    /**
     * @uses usingInterfaceShapeForArea
     * @covers \Leo\SevenGraus\Domain\Interfaces\ShapeInterface::area()
     * @return void
     */
    public function testInterfaceArea()
    {
        $shape = new Shape(3.0, 3.0);
        $rectangle = new Rectangle(3.0, 5.0);
        $circle = new Circle(1.0);

        $shapeArea = $this->usingInterfaceShapeForArea($shape);
        $rectangleArea = $this->usingInterfaceShapeForArea($rectangle);
        $circleArea = $this->usingInterfaceShapeForArea($circle);

        $this->assertEquals((3.0 * 3.0), $shapeArea);
        $this->assertEquals((3.0 * 5.0), $rectangleArea);
        $this->assertEquals(M_PI, $circleArea);
    }

    /**
     * @uses usingInterfaceShapeForID
     * @covers \Leo\SevenGraus\Domain\Interfaces\ShapeInterface::id()
     * @return void
     */
    public function testInterfaceID()
    {
        $shape = new Shape(3.0, 3.0);
        $rectangle = new Rectangle(3.0, 5.0);
        $circle = new Circle(1.0);

        $shapeID = $this->usingInterfaceShapeForID($shape);
        $rectangleID = $this->usingInterfaceShapeForID($rectangle);
        $circleID = $this->usingInterfaceShapeForID($circle);

        $this->assertEquals($shape->id(), $shapeID);
        $this->assertEquals($rectangle->id(), $rectangleID);
        $this->assertEquals($circle->id(), $circleID);
    }

    /**
     * @uses usingInterfaceShapeForCopy
     * @covers\Leo\SevenGraus\Domain\Interfaces\ShapeInterface::copy()
     * @return void
     */
    public function testInterfaceCopy()
    {
        $shape = new Shape(3.0, 3.0);
        $rectangle = new Rectangle(3.0, 5.0);
        $circle = new Circle(1.0);

        $shapeCopy = $this->usingInterfaceShapeForCopy($shape);
        $rectangleCopy = $this->usingInterfaceShapeForCopy($rectangle);
        $circleCopy = $this->usingInterfaceShapeForCopy($circle);

        $this->assertFalse($shape->id() === $shapeCopy->id());
        $this->assertFalse($rectangle->id() === $rectangleCopy->id());
        $this->assertFalse($circle->id() === $circleCopy->id());
    }
}
