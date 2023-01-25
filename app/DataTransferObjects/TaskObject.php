<?php

namespace App\DataTransferObjects;

use Illuminate\Contracts\Support\Arrayable;

class TaskObject implements Arrayable
{
    /**
     * @param string $task
     * @param string $difficulty
     * @param string $time
     */
    public function __construct(
        private readonly string $task,
        private readonly string $difficulty,
        private readonly string $time
    )
    {
    }


    /**
     * @param string $task
     * @param string $difficulty
     * @param string $time
     * @return static
     */
    public static function make(
        string $task,
        string $difficulty,
        string $time
    ): static
    {
        return new static($task, $difficulty, $time);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'task' => $this->task,
            'difficulty' => $this->difficulty,
            'time' => $this->time
        ];
    }
}
