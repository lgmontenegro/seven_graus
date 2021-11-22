<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Tests;

use PHPUnit\Framework\TestCase;
use Leo\SevenGraus\Domain\Rectangle;

class RectangleTest extends TestCase
{
    /**
     * @covers Leo\SevenGraus\Domain\Rectangle::__constructor
     * @return void
     */
    public function testRectangleConstructor()
    {
        $testRectangle = new Rectangle(3.0, 3.0);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Rectangle', $testRectangle);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Interfaces\\ShapeInterface', $testRectangle);
    }

    /**
     * @covers Leo\SevenGraus\Domain\Rectangle::area()
     * @return void
     */
    public function testRectangleAreaFunction()
    {
        $testRectangle = new Rectangle(3.0, 3.0);
        $this->assertEquals(9.0, $testRectangle->area());
    }

    /**
     * @covers Leo\SevenGraus\Domain\Rectangle::copy()
     * @return void
     */
    public function testRectangleCopyFunction()
    {
        $testRectangle = new Rectangle(3.0, 3.0);
        $testRectangleCopy = $testRectangle->copy();
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Rectangle', $testRectangle);
        $this->assertInstanceOf('Leo\\SevenGraus\\Domain\\Rectangle', $testRectangleCopy);
        $this->assertFalse($testRectangle->id()===$testRectangleCopy->id());
    }

    /**
     * @covers Leo\SevenGraus\Domain\Rectangle::TYPE
     * @return void
     */
    public function testRectangleConstant()
    {
        $testCircle = new Rectangle(3.0, 3.0);
        $this->assertEquals(2, $testCircle::TYPE);
    }
}
