<?php

namespace App\Actions;

use App\DataTransferObjects\TaskObject;
use App\Models\Developer;
use App\Repositories\DeveloperRepositoryInterface;

class DivideTaskToDeveloperAction
{
    /**
     * @param DeveloperRepositoryInterface $developerRepository
     */
    public function __construct(
        private readonly DeveloperRepositoryInterface $developerRepository
    )
    {
    }

    /**
     * @param TaskObject $taskObject
     * @return Developer
     */
    public function execute(TaskObject $taskObject): Developer
    {
        $developer = $this->developerRepository->findAvailableDeveloper();

        $developer->increment("intensity", $this->calcIntensity($developer, $taskObject));

        return $developer;
    }

    /**
     * @param Developer $developer
     * @param TaskObject $taskObject
     * @return float|int
     */
    private function calcIntensity(Developer $developer, TaskObject $taskObject): float|int
    {
        return $taskObject->difficultyLevel() / $developer->difficulty;
    }
}
