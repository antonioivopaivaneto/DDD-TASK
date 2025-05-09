<?php

namespace App\Adapters\Outbound;

use App\Domain\Entity\Task;
use App\Domain\Repository\TaskRepositoryInterface;

class InMemoryTaskRepository  implements TaskRepositoryInterface
{
    private array $tasks = [];

    public function findAll(): array
    {
        return $this->tasks;
    }
    public function save(Task $task):void {
        $this->tasks[] = $task;
        
    }
}