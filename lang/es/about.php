<?php

use App\Helpers\MyAge;

return [
    'about' => 'Sobre',
    'me' => 'mi',
    'description' => 'Quiero poder trabajar a distancia en el framework que más me más me apasiona (laravel), en una empresa en cualquier parte del mundo, y poner a prueba las habilidades que he adquirido en el último tiempo. Aunque me siento más cómodo trabajando como backend, también me gusta poder aportar soluciones como desarrollador frontend.',
    'age' => 'Edad',
    'age-desc' => (new MyAge)(),
    'residence' => 'País',
    'desc-residence' => 'Argentina',
    'address' => 'Dirección',
    'desc-address' => 'Vicente López',
    'email' => 'e-mail',
    'desc-email' => 'damianladiani@gmail.com',
    'phone' => 'Teléfono',
    'desc-phone' => '(+54) 15 58140669',
    'what' => 'Lo que',
    'i-do' => 'Hago',
    'what-i-do' => [
        'tool1' => [
            'image' => asset('img/laravel.png'),
            'title' => 'Laravel',
            'description' => 'Desarrollo proyectos en Laravel desde 2013. He trabajado con eloquent, blade, he creado facades, requests, tests, notifications, middlewares, etc.'
        ],
        'tool2' => [
            'image' => asset('img/javascript.png'),
            'title' => 'Javascript',
            'description' => 'He desarrollado con Vanilla Javascript, Vue.js, JQuery y actualmente me encuentro aprendiendo Alpine.js'
        ],
        'tool3' => [
            'image' => asset('img/php.png'),
            'title' => 'PHP',
            'description' => 'Desarrollo en PHP ininterrumpidamente desde 2008. He pasado por PHP 5.1, 5.6, 7.* y actualmente trabajo en PHP 8.2'
        ],
        'tool4' => [
            'image' => asset('img/tools.png'),
            'title' => 'Conocimientos complementarios',
            'description' => 'Poseo experiencia con tecnologías necesarias para el desarrollo como por ejemplo git, HTML, linux, CSS3, bootstrap, docker, etc. '
        ]
    ]
];
