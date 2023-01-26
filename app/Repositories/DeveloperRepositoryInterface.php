<?php

namespace App\Repositories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Collection;

interface DeveloperRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllDevelopers(): Collection;

    /**
     * @return Developer
     */
    public function findAvailableDeveloper(): Developer;
}
