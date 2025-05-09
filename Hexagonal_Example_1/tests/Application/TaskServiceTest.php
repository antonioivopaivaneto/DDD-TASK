<?php

use App\Adapters\Outbound\InMemoryTaskRepository;
use App\Application\Service\TaskService;
use PHPUnit\Framework\TestCase;

class TaskServiceTest extends TestCase
{

    public function testsCreateAndListTask()
    {
        $repository = new InMemoryTaskRepository();
        $service = new TaskService($repository);

        $task = $service->createTask("Criar testes");
        $this->assertEquals("Criar testes",$task->title);

        $tasks = $service->listTasks();
        $this->assertCount(1,$tasks);
        $this->assertEquals($task,$tasks[0]);
        
    }
}