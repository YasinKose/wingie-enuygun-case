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
     * @return Collection
     */
    public function getAllDevelopersWithTaskCount(): Collection;

    /**
     * @param Developer $developer
     * @return Developer
     */
    public function getDeveloperDetail(Developer $developer): Developer;

    /**
     * @return Developer
     */
    public function findAvailableDeveloper(): Developer;
}
