<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Domain;

use Leo\SevenGraus\Domain\Shape;

/**
 * Rectangle Object that represents type of Shape.
 *
 * @package    SevenGraus
 * @author     Leonardo Montenegro <leonardo@montenegro.com.br>
 * @copyright  Leonardo Montenegro <leonardo@montenegro.com.br>
 * @link       https://www.github.com/lgmontenegro/seven_graus
 */
class Rectangle extends Shape
{
    /**
     * @var int TYPE
     */
    const TYPE =  2;
    
    /**
     * Returns a new Rectangle object
     *
     * @return Rectangle
     */
    public function copy(): Rectangle
    {
        return new Rectangle($this->height, $this->width);
    }
}
