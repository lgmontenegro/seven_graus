<?php
namespace Leo\SevenGraus\Handler;

use Leo\SevenGraus\Domain\Interfaces\ShapeInterface;

class ShapeHandler
{
    private ShapeInterface $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    public function area(): float
    {
        return $this->shape->area();
    }

    public function id(): string
    {
        return $this->shape->id();
    }

    public function type(): float
    {
        return $this->shape::TYPE;
    }

    public function copy(): float
    {
        return $this->shape->copy();
    }
}
