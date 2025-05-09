<?php

use App\Adapters\Outbound\InMemoryTaskRepository;
use App\Domain\Entity\Task;
use PHPUnit\Framework\TestCase;

class InMemoryTaskRepositoryTest extends TestCase
{

    public function testSaveAndFindAll()
    {

        $repo = new InMemoryTaskRepository();
        $task = new Task(1,'Testar Respositorio');


        $repo->save($task);
        $tasks = $repo->findAll();

        $this->assertCount(1,$tasks);
        $this->assertSame($task,$tasks[0]);
        
    }
}