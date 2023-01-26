<?php

namespace App\Utils\Task\Providers;

use App\DataTransferObjects\TaskObject;
use App\Utils\Task\TaskProviderAbstract;

class ProviderTwo extends TaskProviderAbstract
{
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return "https://www.mocky.io/v2/5d47f235330000623fa3ebf7";
    }

    /**
     * @param $item
     * @return TaskObject
     */
    public function resolveItem($item): TaskObject
    {
        $key = key($item);
        return TaskObject::make(
            $key,
            $item[$key]['level'],
            $item[$key]['estimated_duration']
        );
    }
}
