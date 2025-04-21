<?php

use App\Helpers\MyAge;

return [
    'about' => 'About',
    'me' => 'me',
    'description' => "PHP/Laravel developer with over 10 years of experience creating efficient solutions for national projects. Passionate about backend development, yet comfortable handling frontend challenges when needed. I’m seeking remote opportunities to leverage my Laravel expertise, collaborate with global teams, and continue to grow professionally.",
    'age' => 'Age',
    'age-desc' => (new MyAge)(),
    'residence' => 'Country',
    'desc-residence' => 'Argentina',
    'address' => 'Address',
    'desc-address' => 'Vicente López',
    'email' => 'e-mail',
    'desc-email' => 'damianladiani@gmail.com',
    'phone' => 'Phone',
    'desc-phone' => '(+54) 15 58140669',
    'what' => 'What',
    'i-do' => 'I Do',
    'what-i-do' => [
        'tool1' => [
            'image' => asset('img/laravel.png'),
            'title' => 'Laravel',
            'description' => 'Laravel developer since 2013 with 9+ years of experience building and maintaining scalable web applications. Expert in:',
            'list' => [
                'Eloquent ORM for complex database modeling and performance tuning.',
                'Blade templating and component-driven UIs.',
                'Custom facades and service providers to decouple logic.',
                'Form Requests for clean, reusable validation rules.',
                'PHPUnit and Pest tests to ensure code quality.',
                'Notifications, Mailables and Queues for asynchronous workflows.',
                'Middleware and policies for robust security and authorization.',
                'RESTful API development with Resource Controllers, API Resources, JSON serialization, versioning, rate limiting and caching.',
            ]
        ],
        'tool2' => [
            'image' => asset('img/javascript.png'),
            'title' => 'Javascript',
            'description' => 'JavaScript developer with 10+ years of experience crafting dynamic, user‑friendly front ends. Expert in',
            'list' => [
                'Vanilla JS: Lightweight DOM manipulation, custom event systems and performance‑driven scripting',
                'Vue.js: Component architecture, Composition API, Vuex state management and Vue Router for SPAs.',
                'jQuery: Legacy codebases—plugin development, migration planning and progressive refactoring.',
                'Alpine.js: Progressive interactivity inside Blade templates and minimal‑overhead UI enhancements.',
                'Responsive & Accessible UI: Semantic HTML, keyboard navigation and mobile‑first layouts.',
            ]
        ],
        'tool3' => [
            'image' => asset('img/php.png'),
            'title' => 'PHP',
            'description' => 'PHP developer since 2008 with 16+ years of experience delivering high‑performance backend systems. Expert in:',
            'list' => [
                'Core PHP & OOP: Namespaces, Traits, SPL, Generators, Closures and SOLID design patterns.',
                'Legacy migration & refactoring: Migrated and refactored a 200k‑line PHP 5.1 codebase to PHP 7/8, eliminating deprecation warnings and boosting throughput.',
                'Modern language features: Typed properties, union types, Attributes and JIT optimizations introduced in PHP 8.x.',
                'Dependency management & standards: Composer packages, semantic versioning, PSR‑4 autoloading, PSR‑12 coding style and PSR‑7/PSR‑17 HTTP interfaces.',
                'Testing: PHPUnit, Mockery, Pest, Behat and Codeception for unit, functional and acceptance testing.',
            ]
        ],
        'tool4' => [
            'image' => asset('img/tools.png'),
            'title' => 'Complementary skills',
            'description' => 'Comprehensive development toolkit with many years of experience leveraging:',
            'list' => [
                'Git & version control: CLI mastery, Git Flow and trunk‑based workflows, pull requests and conflict resolution',
                'HTML5 & semantic markup: Accessible, SEO‑friendly structure, responsive images and multimedia elements',
                'CSS3 & responsive design: Flexbox, Grid, animations, custom properties',
                'Bootstrap (v4/5): Themed components, utility classes and grid system',
                'Linux & shell scripting: Ubuntu/CentOS sysadmin, Bash scripting, package management (apt/yum) and SSH',
                'Docker & containerization: Multi‑stage Dockerfiles and Docker Compose for microservices',
            ]
        ]
    ]

];
