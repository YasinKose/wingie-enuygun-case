<?php

namespace App\Utils\Task;

use App\Exceptions\TaskProviderNotFoundException;
use Illuminate\Support\Collection;

class TaskProviderManager
{
    /**
     * @var TaskProviderContract[]|null
     */
    protected array|null $taskProviders = null;

    /**
     * @param array $taskProviders
     */
    public function __construct(array $taskProviders = [])
    {
        foreach ($taskProviders as $taskProvider) {
            if (!$taskProvider instanceof TaskProviderContract) {
                continue;
            }

            $this->addTaskProvider($taskProvider);
        }
    }

    /**
     * @param TaskProviderContract $taskProviderContract
     * @return void
     */
    private function addTaskProvider(TaskProviderContract $taskProviderContract): void
    {
        $this->taskProviders[] = $taskProviderContract;
    }

    /**
     * @return Collection
     */
    public function getTasks(): Collection
    {
        if ($this->taskProviders === null) {
            throw new TaskProviderNotFoundException();
        }

        $taskList = collect();
        foreach ($this->taskProviders as $taskProvider) {
            $taskList->add($taskProvider->getTasks());
        }

        return $taskList->collapse();
    }
}
