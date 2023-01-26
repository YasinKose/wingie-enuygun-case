<?php

namespace App\Repositories;

use App\DataTransferObjects\TaskObject;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository implements TaskRepositoryInterface
{

    /**
     * @return Collection
     */
    public function getAllTasks(): Collection
    {
        return Task::all();
    }

    /**
     * @param TaskObject $taskObject
     * @return Task
     */
    public function createTask(TaskObject $taskObject): Task
    {
        return Task::create($taskObject->toArray());
    }
}
