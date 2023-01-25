<?php

namespace App\Utils\Task\Providers;

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
}
