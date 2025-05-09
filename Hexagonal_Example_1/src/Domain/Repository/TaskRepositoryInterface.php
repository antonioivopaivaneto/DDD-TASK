<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Task;

interface TaskRepositoryInterface
{
    public function findAll():array;
    public function save(Task $task):void;

}