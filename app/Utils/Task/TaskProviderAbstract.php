<?php

namespace App\Utils\Task;

abstract class TaskProviderAbstract implements TaskProviderContract
{
    /**
     * @var array|null
     */
    protected ?array $tasks = null;

    /**
     * @return array|null
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }
}
