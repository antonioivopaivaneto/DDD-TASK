<?php
namespace App\Adapters\Inbound;

use App\Application\Service\TaskService;

class CliTasksController
{
    public function __construct(private TaskService $service) {
        
    }


    public function handle():void {

        $task = $this->service->createTask("Ler livro DDD");
        print_r($task);

        $all = $this->service->listTasks();
        print_r($all);
        
    }
}