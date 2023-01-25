<?php

namespace App\Utils\Task;

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
}
