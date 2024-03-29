<?php

use App\Helpers\MyAge;

return [
    'about' => 'About',
    'me' => 'me',
    'description' => "I want to be able to work remotely in the framework that I am most passionate about (laravel), in a company anywhere in the world, and test the skills I have acquired in the last time. Although I feel more comfortable working as a backend developer, I also like to be able to provide solutions as a frontend developer.",
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
            'description' => 'I\'ve been developing projects in Laravel since 2013. I have worked with eloquent, blade, I have created facades, requests, tests, notifications, middlewares, etc.'
        ],
        'tool2' => [
            'image' => asset('img/javascript.png'),
            'title' => 'Javascript',
            'description' => 'I\'ve developed systems with Vanilla Javascript, Vue.js, JQuery and I am currently learning Alpine.js.'
        ],
        'tool3' => [
            'image' => asset('img/php.png'),
            'title' => 'PHP',
            'description' => 'I\'ve been developing in PHP continuously since 2008. I have gone through PHP 5.1, 5.6, 7.* and I am currently working on PHP 8.2.'
        ],
        'tool4' => [
            'image' => asset('img/tools.png'),
            'title' => 'Complementary skills',
            'description' => 'I\'ve experience with technologies needed for development such as git, HTML, linux, CSS3, bootstrap, docker, etc.'
        ]
    ]

];
