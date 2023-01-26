<?php

namespace App\Utils\Task;

use App\Exceptions\TaskProviderNotFoundException;
use Illuminate\Support\Facades\Http;

abstract class TaskProviderAbstract implements TaskProviderContract
{
    /**
     * @var array|null
     */
    protected ?array $tasks = null;

    /**
     * @return array
     */
    public function getTasks(): array
    {
        if ($this->tasks === null) {
            $this->fetchTasks();
        }

        return $this->tasks;
    }

    /**
     * @return void
     */
    private function fetchTasks(): void
    {
        $response = Http::get($this->getEndpoint());

        if ($response->status() !== 200) {
            throw new TaskProviderNotFoundException("Sağlayıcıdan geçerli yanıt alınamadı!");
        }

        $this->tasks = $response
            ->collect()
            ->map(function ($items) {
                return $this->resolveItem($items);
            })
            ->toArray();
    }
}
