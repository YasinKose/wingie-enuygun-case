<?php

namespace App\Repositories;

use App\Exceptions\AvailableDeveloperNotFoundException;
use App\Models\Developer;
use Illuminate\Database\Eloquent\Collection;

class DeveloperRepository implements DeveloperRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllDevelopers(): Collection
    {
        return Developer::all();
    }

    /**
     * @return Collection
     */
    public function getAllDevelopersWithTaskCount(): Collection
    {
        return Developer::withCount("tasks")->get();
    }

    /**
     * @param Developer $developer
     * @return Developer
     */
    public function getDeveloperDetail(Developer $developer): Developer
    {
        return $developer->load("tasks");
    }

    /**
     * Müsait olan bir kullanıcıyı getir
     *
     * @return Developer
     */
    public function findAvailableDeveloper(): Developer
    {
        $developer = Developer::orderBy("intensity")->first();

        if ($developer === null) {
            throw new AvailableDeveloperNotFoundException();
        }

        return $developer;
    }
}
