<?php
/*
 * This file is part of the SevenGraus package.
 *
 * @author Leonardo Montenegro <leonardo@montenegro.com.br>
 */

namespace Leo\SevenGraus\Domain\Interfaces;

use Ramsey\Uuid\Uuid;

/**
 * Interface for generate an ID.
 *
 * @package    SevenGraus
 * @author     Leonardo Montenegro <leonardo@montenegro.com.br>
 * @copyright  Leonardo Montenegro <leonardo@montenegro.com.br>
 * @link       https://www.github.com/lgmontenegro/seven_graus
 */
interface IDGeneratorInterface
{
    /**
     * Generates an string for ID
     *
     * @return string
     */
    public function createStringID(): string;

    /**
     * Generates an integer for ID
     *
     * @return int
     */
    public function createIntegerID(): int;
}
