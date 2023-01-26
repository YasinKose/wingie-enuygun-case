<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Repositories\DeveloperRepositoryInterface;
use Illuminate\Contracts\View\View;

class DeveloperController extends Controller
{
    /**
     * @param DeveloperRepositoryInterface $developerRepository
     */
    public function __construct(private readonly DeveloperRepositoryInterface $developerRepository)
    {
    }

    /**
     * @return View
     */
    public function getDeveloperList()
    {
        return view("developer-list", [
            'developers' => $this->developerRepository->getAllDevelopersWithTaskCount()
        ]);
    }

    /**
     * @param Developer $developer
     * @return View
     */
    public function getDeveloperDetail(Developer $developer)
    {
        return view("developer-detail", [
            'developer' => $this->developerRepository->getDeveloperDetail($developer)
        ]);
    }
}
