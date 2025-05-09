<?php
namespace App\Application\Service;
use App\Domain\Entity\Task;
use App\Domain\Repository\TaskRepositoryInterface;
class TaskService
{
    public function __construct(private TaskRepositoryInterface $taskRepository) {
    }
    public function listTasks():array {
        return $this->taskRepository->findAll(); 
    }
    public function createTask(string $title):Task
    {
        $task = new Task(id: rand(1,100),title:$title);
        $this->taskRepository->save($task);
        return $task;
    }
}