<?php

return [
    'title' => 'Curriculum',
    'education' => [
        'title' => 'Educación',
        'studies' => [
            ['name' => 'Universidad Tecnológica Nacional (UTN)','title' => 'Técnico Superior en Programación', 'since' => 2008, 'until' => 2011],
            ['name' => 'Universidad Tecnológica Nacional (UTN)','title' => 'Técnico Superior en Sistemas Informáticos', 'since' => 2011, 'until' => 2013],
            ['name' => 'Highland','description' => 'Estudié 3 años en el instituto highland, creo que mi nivel es intermedio', 'since' => 2010, 'until' => 2013],
            ['name' => 'Platzi','description' => 'Autodidacta', 'since' => 2016, 'until' => 'Siempre','url' => 'https://www.platzi.com/p/damianladiani/'],
            ['name' => 'Laracast','description' => 'Autodidacta', 'since' => 2019, 'until' => 'Siempre','url' => 'https://laracasts.com/@pollitofive'],
            ['name' => 'Laraveldaily','description' => 'Autodidacta', 'since' => 2023, 'until' => 'Siempre','url' => 'https://laraveldaily.com']
        ]
    ],
    'experience' => [
        'title' => 'Experiencia',
        'jobs' => [
            ['company' => 'Ejército Argentino', 'position' => 'Desarrollador Web Junior', 'since' => 2006, 'until' => 2011,
                'description' => 'Programador en un sistema logístico en el Ejército Argentino. Durante los últimos meses, líder del equipo de desarrollo.'],
            ['company' => 'Ministerio de Defensa', 'position' => 'Desarrollador Web Semi Senior', 'since' => 2011, 'until' => 2013,
                'description' => 'Programador de sistemas web con backend en PHP y bases de datos en mysql.'],
            ['company' => 'Ministerio de Seguridad', 'position' => 'Desarrollador Web Semi Senior', 'since' => 2013, 'until' => 2019,
                'description' => 'Analista programador desarrollando algunos proyectos, principalmente en laravel. Desarrollo frontend con CSS3 y HTML5, aplicando librerías como JQuery, Vue.js o bootstrap'],
            ['company' => 'Metrotel', 'position' => 'Desarrollador Web Senior', 'since' => 2019, 'until' => 'Ahora',
                'description' => 'Como Analista Programador en la plataforma Dispo, superviso los módulos clave para el seguimiento de oportunidades de venta, la gestión del catálogo de productos y el mantenimiento de los registros de la empresa, garantizando la integridad de los datos y el buen funcionamiento del sistema. También lidero revisiones de código en Laravel, promoviendo los estándares PSR, los patrones de diseño y una arquitectura limpia para acompañar la migración en curso, mejorar la mantenibilidad y reducir los problemas posteriores al despliegue.'],
            ['position' => 'Desarrollador Freelance', 'since' => 2009, 'until' => 'Ahora',
                'description' => 'Programador de sistemas, páginas y APIs en PHP, algunos proyectos de forma individual y otros con amigos, para diferentes propósitos. En el pasado, desarrollé un sistema de seguros de autos, otro para una heladería, hasta hace poco estuve desarrollando una plataforma de subastas inversas.'],
        ]
    ],
    'skills' => [
        'title' => 'Habilidades',
        'list' => [
            ['name' => 'Laravel', 'rating' => 9],
            ['name' => 'PHP', 'rating' => 9],
            ['name' => 'Javascript', 'rating' => 8],
            ['name' => 'HTML/CSS3', 'rating' => 8],
            ['name' => 'MySql', 'rating' => 8],
            ['name' => 'Git', 'rating' => 8],
            ['name' => 'Nivel de Inglés', 'rating' => 8],
            ['name' => 'Web Services API', 'rating' => 8],
            ['name' => 'TDD', 'rating' => 7],
            ['name' => 'Bootstrap', 'rating' => 6],
            ['name' => 'Linux', 'rating' => 5],
            ['name' => 'Vue.js', 'rating' => 5],
            ['name' => 'Docker', 'rating' => 4],
            ['name' => 'Redis', 'rating' => 4],
            ['name' => 'Livewire', 'rating' => 3],
            ['name' => 'Pest', 'rating' => 3],
            ['name' => 'Filament', 'rating' => 3],
            ['name' => 'Tailwind', 'rating' => 3],
            ['name' => 'Inertia.js', 'rating' => 3],
        ]
    ],
    'knowledge' => [
        'title' => 'Otros Conocimientos',
        'list' => [
            'JQuery','Diseño web adaptable','SOLID','Eloquent','Queues','Blade','Cron'
        ]
    ]
];
