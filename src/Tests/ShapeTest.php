<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Tests;

use PHPUnit\Framework\TestCase;
use Leo\SevenGraus\Domain\Shape;

class ShapeTest extends TestCase
{
    /**
     * @covers Leo\SevenGraus\Domain\Shape::__constructor
     * @return void
     */
    public function testShapeConstructor()
    {
        $testShape = new Shape(3.0, 3.0);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Shape', $testShape);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Interfaces\\ShapeInterface', $testShape);
    }

    /**
     * @covers Leo\SevenGraus\Domain\Shape::area()
     * @return void
     */
    public function testShapeAreaFunction()
    {
        $testShape = new Shape(3.0, 3.0);
        $this->assertEquals(9.0, $testShape->area());
    }

    /**
     * @covers Leo\SevenGraus\Domain\Shape::copy()
     * @return void
     */
    public function testShapeCopyFunction()
    {
        $testShape = new Shape(3.0, 3.0);
        $testShapeCopy = $testShape->copy();
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Shape', $testShape);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Shape', $testShapeCopy);
        $this->assertFalse($testShape->id()===$testShapeCopy->id());
    }

    /**
     * @covers Leo\SevenGraus\Domain\Shape::TYPE
     * @return void
     */
    public function testShapeConstant()
    {
        $testCircle = new Shape(3.0, 3.0);
        $this->assertEquals(1, $testCircle::TYPE);
    }
}
