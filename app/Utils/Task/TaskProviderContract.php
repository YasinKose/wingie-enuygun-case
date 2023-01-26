<?php

namespace App\Utils\Task;

use App\DataTransferObjects\TaskObject;

interface TaskProviderContract
{
    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @param $item
     * @return TaskObject
     */
    public function resolveItem($item): TaskObject;

    /**
     * @return array|null
     */
    public function getTasks(): ?array;
}

