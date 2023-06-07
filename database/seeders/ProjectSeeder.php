<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var string[][] $projects */
        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'Build a fully functional e-commerce website with shopping cart and payment integration.',
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Develop a cross-platform mobile app using React Native for iOS and Android devices.',
            ],
            [
                'title' => 'Data Analytics Dashboard',
                'description' => 'Create an interactive data analytics dashboard to visualize and analyze complex data sets.',
            ],
            [
                'title' => 'Social Media Marketing Campaign',
                'description' => 'Plan and execute a social media marketing campaign to increase brand awareness and engagement.',
            ],
        ];

        foreach ($projects as $projectData) {
            $slug = Str::slug($projectData['title'], '-');
            $projectData['slug'] = $slug;
            Project::create($projectData);
        }
    }
}