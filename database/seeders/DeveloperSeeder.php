<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Developer::create([
                'name' => sprintf("Developer #%d", $i),
                'time' => 1,
                'difficulty' => $i
            ]);
        }
    }
}
