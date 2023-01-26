<?php

namespace App\Utils\Task;

use App\Exceptions\TaskProviderNotFoundException;

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
     * @return array
     */
    public function getTasks(): array
    {
        if ($this->taskProviders === null) {
            throw new TaskProviderNotFoundException();
        }

        $taskList = [];
        foreach ($this->taskProviders as $taskProvider) {
            $taskList = array_merge($taskList, ...$taskProvider->getTasks());
        }

        return $taskList;
    }
}
