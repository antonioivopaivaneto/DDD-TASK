<?php

namespace Tests\Domain;

use PHPUnit\Framework\TestCase;
use App\Domain\Entity\Task;

/**
 *   @covers \App\Domain\Entity\Task
 */
class TaskTest extends TestCase
{
    public function testCompletedTask(): void
    {
        $task = new Task(1, "Estudar Excel");
        $this->assertFalse($task->completed);

        $task->complete();
        $this->assertTrue($task->completed);
    }
}
