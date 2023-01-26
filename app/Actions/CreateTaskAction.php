<?php

namespace App\Actions;

use App\DataTransferObjects\TaskObject;
use App\Models\Task;
use App\Repositories\TaskRepositoryInterface;
use Spatie\QueueableAction\QueueableAction;

class CreateTaskAction
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct(
        private readonly TaskRepositoryInterface     $taskRepository,
        private readonly DivideTaskToDeveloperAction $divideTaskToDeveloper
    )
    {
    }

    public function execute(TaskObject $taskObject): Task
    {
        $task = $this->taskRepository->createTask($taskObject);
        $this->divideTaskToDeveloper->execute($task);

        return $task;
    }
}
