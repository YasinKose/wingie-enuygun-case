<?php

namespace App\Repositories;

use App\DataTransferObjects\TaskObject;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

interface TaskRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllTasks(): Collection;

    /**
     * @param TaskObject $taskObject
     * @param int $developerId
     * @return Task
     */
    public function createTask(TaskObject $taskObject, int $developerId): Task;

}
