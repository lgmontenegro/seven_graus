<?php
namespace Leo\SevenGraus\Service;

use Leo\SevenGraus\Domain\Interfaces\IDGeneratorInterface;
use Ramsey\Uuid\Uuid;

class IDGenerator implements IDGeneratorInterface
{
    /**
     * Generates an string for ID
     *
     * @return string
     */
    public function createStringID(): string
    {
        return Uuid::Uuid4();
    }

    /**
     * Generates an integer for ID
     *
     * @return int
     */
    public function createIntegerID(): int
    {
        return rand(0, 10000);
    }
}
