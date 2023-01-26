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
     * @param int $developerId
     * @return Task
     */
    public function createTask(TaskObject $taskObject, int $developerId): Task
    {
        return Task::create([
            ...(array)$taskObject,
            ...['developer_id' => $developerId]
        ]);
    }
}
