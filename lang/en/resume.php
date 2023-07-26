<?php

return [
    'title' => 'Resume',
    'education' => [
        'title' => 'Education',
        'studies' => [
            ['name' => 'Universidad Tecnológica Nacional (UTN)','title' => 'Technical superior in Programming', 'since' => 2008, 'until' => 2011],
            ['name' => 'Universidad Tecnológica Nacional (UTN)','title' => 'Technical superior in Computer Science', 'since' => 2011, 'until' => 2013],
            ['name' => 'Highland','description' => 'I have studied english for 3 years in the institute highland, I think my level is intermediate', 'since' => 2010, 'until' => 2013],
            ['name' => 'Platzi','description' => 'Self-Taught', 'since' => 2016, 'until' => 'Forever','url' => 'https://www.platzi.com/p/damianladiani/'],
            ['name' => 'Laracasts','description' => 'Self-Taught', 'since' => 2019, 'until' => 'Forever','url' => 'https://laracasts.com/@pollitofive'],
            ['name' => 'Laraveldaily','description' => 'Self-Taught', 'since' => 2023, 'until' => 'Forever','url' => 'https://laraveldaily.com'],
        ]
    ],
    'experience' => [
        'title' => 'Experience',
        'jobs' => [
            ['company' => 'Argentinian Army', 'position' => 'Junior Web Developer', 'since' => 2006, 'until' => 2011,
                'description' => 'Programmer of a logistic system of Argentinian Army. During the last months, chief of the developer team.'],
            ['company' => 'Ministry of Defense', 'position' => 'Semi Senior Web Developer', 'since' => 2011, 'until' => 2013,
                'description' => 'Programmer of web systems with backend in PHP and databases with mysql.'],
            ['company' => 'Ministry of Security', 'position' => 'Semi Senior Web Developer', 'since' => 2013, 'until' => 2019,
                'description' => 'Programmer analyst developing some projects, principally in laravel. Developer frontend with CSS3 and HTML5, applying libraries like JQuery, Vue.js or bootstrap.'],
            ['company' => 'Metrotel', 'position' => 'Senior Web Developer', 'since' => 2019, 'until' => 'Now',
                'description' => 'Programmer analyst, working in a system called Dispo, that handles the opportunities of sell, products and records of the company, between other things. In addition, I do code reviews in laravel, where I can propose best practices in a migration that is currently happening within the company.'],
            ['position' => 'Freelance Developer', 'since' => 2009, 'until' => 'Now',
                'description' => 'Programmer of PHP systems, pages and APIs, some projects individually and others with friends, for different purposes. In the past, I developed a car insurance system, another one for an ice cream shop, until recently I was developing a reverse auction platform.'],
        ]
    ],
    'skills' => [
        'title' => 'Skills',
        'list' => [
            ['name' => 'Laravel', 'rating' => 9],
            ['name' => 'PHP', 'rating' => 9],
            ['name' => 'Javascript', 'rating' => 8],
            ['name' => 'HTML/CSS3', 'rating' => 8],
            ['name' => 'MySql', 'rating' => 7],
            ['name' => 'Git', 'rating' => 7],
            ['name' => 'English Level', 'rating' => 7],
            ['name' => 'Web Services API', 'rating' => 6],
            ['name' => 'TDD', 'rating' => 6],
            ['name' => 'Bootstrap', 'rating' => 6],
            ['name' => 'Linux', 'rating' => 5],
            ['name' => 'Vue.js', 'rating' => 5],
            ['name' => 'Docker', 'rating' => 4],
            ['name' => 'Redis', 'rating' => 4],
            ['name' => 'Livewire', 'rating' => 3],
            ['name' => 'Tailwind', 'rating' => 3],
            ['name' => 'Inertia.js', 'rating' => 3],
        ]
    ],
    'knowledge' => [
        'title' => 'Other Knowledge',
        'list' => [
            'JQuery','Responsive Design','SOLID','Eloquent','Queues','Blade','Cron'
        ]
    ]
];
