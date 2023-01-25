<?php

namespace App\Utils\Task;

interface TaskProviderContract
{
    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return array|null
     */
    public function getTasks(): ?array;
}

