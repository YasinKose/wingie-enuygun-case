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

    /**
     * @param TaskObject $taskObject
     * @return Task
     */
    public function execute(TaskObject $taskObject): Task
    {
        $developer = $this->divideTaskToDeveloper->execute($taskObject);

        return $this->taskRepository->createTask($taskObject, $developer->id);
    }
}
