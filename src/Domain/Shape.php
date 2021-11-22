<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Domain;

use Ramsey\Uuid\Uuid;
use Leo\SevenGraus\Domain\Interfaces\ShapeInterface;

/**
 * Represents a Shape and implementes ShapeInterface.
 *
 * @package    SevenGraus
 * @author     Leonardo Montenegro <leonardo@montenegro.com.br>
 * @copyright  Leonardo Montenegro <leonardo@montenegro.com.br>
 * @link       https://www.github.com/lgmontenegro/seven_graus
 */
class Shape implements ShapeInterface
{
    /**
     * @var int TYPE
     */
    const TYPE = 1;

    /**
     * @var string
     */
    private string $ID;
    /**
     * @var float
     */
    protected float $width;
    /**
     * @var float
     */
    protected float $height;
    /**
     * @var string
     */
    public string $name;

    /**
     * @param float $height
     * @param float $width
     */
    public function __construct(float $height, float $width)
    {
        $this->width = $width;
        $this->height = $height;
        $this->ID = $this->setID();
    }

    /**
     * Calculates the Shape area.
     *
     * @return float
     */
    public function area(): float
    {
        return $this->width * $this->height;
    }

    /**
     * Returns a new circle object
     *
     * @return Shape
     */
    public function copy(): Shape
    {
        return new Shape($this->height, $this->width);
    }

    /**
     * Returns the private ID for Shape
     *
     * @return string
     */
    public function id(): string
    {
        return $this->ID;
    }

    /**
     * Sets the Circle object ID
     *
     * @return string
     */
    private function setID(): string
    {
        return Uuid::uuid4();
    }
}
