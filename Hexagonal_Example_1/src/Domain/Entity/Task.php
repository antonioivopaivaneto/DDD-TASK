<?php

namespace App\Domain\Entity;

class Task
{
    public function __construct(
        public readonly int $id,
        public string $title,
        public bool $completed = false,
    ) { }

    public function complete():void
    {
        $this->completed = true;
        
    }
}