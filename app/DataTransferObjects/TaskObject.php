<?php

namespace App\DataTransferObjects;

class TaskObject
{
    /**
     * @param string $task
     * @param string $difficulty
     * @param string $time
     */
    public function __construct(
        public readonly string $task,
        public readonly string $difficulty,
        public readonly string $time
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
     * @return float|int
     */
    public function difficultyLevel(): float|int
    {
        return intval($this->difficulty) * intval($this->time);
    }
}
