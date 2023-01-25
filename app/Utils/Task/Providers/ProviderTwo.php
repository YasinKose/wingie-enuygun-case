<?php

namespace App\Utils\Task\Providers;

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
}
