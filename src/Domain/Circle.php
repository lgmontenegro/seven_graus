<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Domain;

use Leo\SevenGraus\Domain\Interfaces\IDGeneratorInterface;
use Leo\SevenGraus\Domain\Shape;
use Ramsey\Uuid\Uuid;

/**
 * Circle Object that represents type of Shape.
 *
 * @package    SevenGraus
 * @author     Leonardo Montenegro <leonardo@montenegro.com.br>
 * @copyright  Leonardo Montenegro <leonardo@montenegro.com.br>
 * @link       https://www.github.com/lgmontenegro/seven_graus
 */
class Circle extends Shape
{
    
    /**
     * @var int TYPE
     */
    const TYPE =  3;

    /**
     * @var float
     */
    protected float $radius;

    /**
     * @var IDGeneratorInterface
     */
    protected ?IDGeneratorInterface $idGenerator = null;

    /**
     * @param float $radius
     */
    public function __construct(float $radius, IDGeneratorInterface $idGenerator = null)
    {
        $this->radius = $radius;
        if (is_null($idGenerator)) {
            $this->ID = $this->setID();
            return;
        }

        $this->idGenerator = $idGenerator;
        $this->ID = $this->idGenerator->createStringID();
    }

    /**
     * Calculates the Circle area.
     *
     * @return float
     */
    public function area(): float
    {
        return pow($this->radius, 2) * M_PI;
    }

    /**
     * Returns a new circle object
     *
     * @return Circle
     */
    public function copy(): Circle
    {
        return new Circle($this->radius, $this->idGenerator);
    }

    /**
     * Returns the private ID for Circle
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
