<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Portfolio Coding Projects',
                'description' => 'Kumpulan hasil coding dan pembelajaran web development menggunakan teknologi modern',
                'image' => 'project1.jpg',
                'technologies' => ['PHP', 'JavaScript', 'Laravel', 'MySQL'],
                'github' => 'https://github.com',
                'demo' => '#'
            ],
            [
                'title' => 'Network Infrastructure Project',
                'description' => 'Proyek jaringan internet dan infrastruktur yang dikuasai dari pengalaman di Telkomsel',
                'image' => 'project2.jpg',
                'technologies' => ['Network Configuration', 'Troubleshooting', 'Infrastructure'],
                'github' => 'https://github.com',
                'demo' => '#'
            ],
            [
                'title' => 'Technical Skills Portfolio',
                'description' => 'Dokumentasi keahlian teknik mesin dan teknisi komputer yang telah dipelajari',
                'image' => 'project3.jpg',
                'technologies' => ['Computer Repair', 'Hardware', 'Technical Support'],
                'github' => 'https://github.com',
                'demo' => '#'
            ]
        ];

        return view('portfolio.projects', compact('projects'));
    }

    public function skills()
    {
        $skills = [
            'Backend' => [
                'PHP' => 75,
                'Laravel' => 70,
                'Python' => 65,
                'API Development' => 60
            ],
            'Frontend' => [
                'JavaScript' => 80,
                'Vue.js' => 70,
                'React' => 65,
                'HTML/CSS' => 85
            ],
            'Database' => [
                'MySQL' => 75,
                'PostgreSQL' => 65,
                'Database Design' => 70,
                'Query Optimization' => 60
            ],
            'Tools & Network' => [
                'Git' => 80,
                'Visual Studio Code' => 90,
                'Windsurf' => 85,
                'Network Configuration' => 80
            ]
        ];

        return view('portfolio.skills', compact('skills'));
    }
}
