<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface DeveloperRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllDevelopers(): Collection;
}
