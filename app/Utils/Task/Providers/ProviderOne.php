<?php

namespace App\Utils\Task\Providers;

use App\DataTransferObjects\TaskObject;
use App\Utils\Task\TaskProviderAbstract;

class ProviderOne extends TaskProviderAbstract
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return "https://www.mocky.io/v2/5d47f24c330000623fa3ebfa";
    }

    /**
     * @param $item
     * @return TaskObject
     */
    public function resolveItem($item): TaskObject
    {
        return TaskObject::make(
            $item['id'],
            $item['zorluk'],
            $item['zorluk']
        );
    }
}
