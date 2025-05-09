<?php
require_once 'vendor/autoload.php';

use App\Adapters\Inbound\CliTasksController;
use App\Adapters\Outbound\InMemoryTaskRepository;
use App\Application\Service\TaskService;

$repository = new InMemoryTaskRepository();
$service = new TaskService($repository);
$controller = new CliTasksController($service);

$controller->handle();