<?php

namespace App\Actions;

use App\Models\Developer;
use App\Models\Task;
use App\Repositories\DeveloperRepositoryInterface;
use Spatie\QueueableAction\QueueableAction;

class DivideTaskToDeveloperAction
{
    use QueueableAction;

    public function __construct(
        private readonly DeveloperRepositoryInterface $developerRepository
    )
    {
    }

    /**
     * @param Task $task
     * @return Developer
     */
    public function execute(Task $task): Developer
    {
        $developer = $this->developerRepository->findAvailableDeveloper();

        $developer->increment("intensity", $this->calcIntensity($developer, $task));

        return $developer;
    }

    /**
     * @param Developer $developer
     * @param Task $task
     * @return float|int
     */
    private function calcIntensity(Developer $developer, Task $task): float|int
    {
        return $task->difficulty_level / $developer->difficulty;
    }
}
