<?php

namespace App\Domain\Entity;

class Task
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly bool $completed = true,
    ) { }

    public function complete():void
    {
        $this->completed = true;
        
    }
}