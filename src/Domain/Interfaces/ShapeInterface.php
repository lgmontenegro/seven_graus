<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Domain\Interfaces;

/**
 * Interface for Shape object behavior.
 *
 * @package    SevenGraus
 * @author     Leonardo Montenegro <leonardo@montenegro.com.br>
 * @copyright  Leonardo Montenegro <leonardo@montenegro.com.br>
 * @link       https://www.github.com/lgmontenegro/seven_graus
 */
interface ShapeInterface
{
    /**
     * Calculates the area of a Shape object.
     *
     * @return float
     */
    public function area(): float;

    /**
     * Makes a copy of a Shape object.
     */
    public function copy();

    /**
     * Getter for Shape object ID (UUID string).
     *
     * @return string
     */
    public function id(): string;
}
