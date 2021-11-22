<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Tests;

use PHPUnit\Framework\TestCase;
use Leo\SevenGraus\Domain\Circle;

class CircleTest extends TestCase
{
    /**
     * @covers \Leo\SevenGraus\Domain\Circle::__constructor()
     * @return void
     */
    public function testCircleContructor()
    {
        $testCircle = new Circle(3.0);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Circle', $testCircle);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Interfaces\\ShapeInterface', $testCircle);
    }

    /**
     * @covers \Leo\SevenGraus\Domain\Circle::area()
     * @return void
     */
    public function testCircleAreaFunction()
    {
        $testCircle = new Circle(1.0);
        $this->assertEquals(M_PI, $testCircle->area());
    }

    /**
     * @covers \Leo\SevenGraus\Domain\Circle::copy()
     * @return void
     */
    public function testCircleCopyFunction()
    {
        $testCircle = new Circle(3.0);
        $testCircleCopy = $testCircle->copy();
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Circle', $testCircle);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Circle', $testCircleCopy);
        $this->assertFalse($testCircle->id()===$testCircleCopy->id());
    }

    /**
     * @covers \Leo\SevenGraus\Domain\Circle::TYPE
     * @return void
     */
    public function testCircleConstant()
    {
        $testCircle = new Circle(1.0);
        $this->assertEquals(3, $testCircle::TYPE);
    }
}
