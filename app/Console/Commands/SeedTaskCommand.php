<?php

namespace App\Console\Commands;

use App\Actions\CreateTaskAction;
use App\Utils\Task\TaskProviderManager;
use Illuminate\Console\Command;

class SeedTaskCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'seed:task';

    /**
     * @var string
     */
    protected $description = 'Bu komut tetiklendiği zaman sağlayıcılardan gelen veriler işlenir ve veritabanına yüklenir.';

    /**
     * @param TaskProviderManager $taskProviderManager
     * @param CreateTaskAction $createTaskAction
     */
    public function __construct(
        private readonly TaskProviderManager $taskProviderManager,
        private readonly CreateTaskAction    $createTaskAction
    )
    {
        parent::__construct();
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->taskProviderManager->getTasks()
            ->each(function ($task) {
                $this->createTaskAction->execute($task);
            });

        $this->info("Veriler sağlayıcıdan çekildi ve sisteme yüklendi!");
    }
}
