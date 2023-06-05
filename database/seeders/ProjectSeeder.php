<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'Progetto 1',
                'description' => 'Descrizione del progetto 1',
            ],
            [
                'title' => 'Progetto 2',
                'description' => 'Descrizione del progetto 2',
            ],
            [
                'title' => 'Progetto 3',
                'description' => 'Descrizione del progetto 3',
            ],
            [
                'title' => 'Progetto 4',
                'description' => 'Descrizione del progetto 4',
            ],

        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}