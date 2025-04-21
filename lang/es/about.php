<?php

use App\Helpers\MyAge;

return [
    'about' => 'Sobre',
    'me' => 'mi',
    'description' => 'Desarrollador PHP/Laravel con más de 10 años de experiencia creando soluciones eficientes para proyectos a nivel nacional. Apasionado por el desarrollo backend, aunque también me desenvuelvo con soltura en el frontend cuando es necesario. Busco oportunidades remotas para aplicar mi experiencia en Laravel, colaborar con equipos nacionales o internacionales y seguir creciendo profesionalmente.',
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
            'description' => 'Desarrollador Laravel desde 2013 con más de 9 años de experiencia creando y manteniendo aplicaciones web escalables. Experto en:',
            'list' => [
                'Eloquent ORM para modelado complejo de bases de datos y optimización de rendimiento.',
                'Plantillas Blade y UIs basadas en componentes.',
                'Facades y service providers personalizados para desacoplar la lógica.',
                'Form Requests para reglas de validación limpias y reutilizables.',
                'Tests con PHPUnit y Pest para asegurar la calidad del código.',
                'Notificaciones, Mailables y Queues para flujos de trabajo asíncronos.',
                'Middlewares y policies para seguridad y autorización robusta.',
                'Desarrollo de APIs RESTful con Resource Controllers, API Resources, serialización JSON, versionado, rate limiting y caching.',
            ],
        ],
        'tool2' => [
            'image' => asset('img/javascript.png'),
            'title' => 'Javascript',
            'description' => 'Desarrollador JavaScript con más de 10 años de experiencia creando interfaces dinámicas y fáciles de usar. Experto en:',
            'list' => [
                'Vanilla JS: Manipulación ligera del DOM, sistemas de eventos personalizados y scripting enfocado en rendimiento.',
                'Vue.js: Arquitectura basada en componentes, Composition API, gestión de estado con Vuex y Vue Router para SPAs.',
                'jQuery: Código heredado—desarrollo de plugins, planificación de migración y refactorización progresiva.',
                'Alpine.js: Interactividad progresiva dentro de plantillas Blade y mejoras de UI con mínima sobrecarga.',
                'UI responsiva y accesible: HTML semántico, navegación por teclado y diseño mobile‑first.',
            ],
        ],
        'tool3' => [
            'image' => asset('img/php.png'),
            'title' => 'PHP',
            'description' => 'Desarrollador PHP desde 2008 con más de 16 años de experiencia entregando sistemas backend de alto rendimiento. Experto en:',
            'list' => [
                'PHP Core y POO: Namespaces, Traits, SPL, Generators, Closures y patrones de diseño SOLID.',
                'Migración y refactorización de código legado: Migración y refactorización de una base de código PHP 5.1 de 200 000 líneas a PHP 7/8, eliminando advertencias deprecadas y mejorando el rendimiento.',
                'Características modernas del lenguaje: Propiedades tipadas, tipos unión, Attributes y optimizaciones JIT introducidas en PHP 8.x.',
                'Gestión de dependencias y estándares: Paquetes Composer, versionado semántico, autoloading PSR‑4, estilo de código PSR‑12 e interfaces HTTP PSR‑7/PSR‑17.',
                'Testing: PHPUnit, Mockery, Pest, Behat y Codeception para tests unitarios, funcionales y de aceptación.',
            ],
        ],
        'tool4' => [
            'image' => asset('img/tools.png'),
            'title' => 'Conocimientos complementarios',
            'description' => 'Conjunto de herramientas de desarrollo integral con muchos años de experiencia utilizando:',
            'list' => [
                'Git y control de versiones: Dominio de la CLI, Git Flow y flujos basados en trunk, pull requests y resolución de conflictos.',
                'HTML5 y marcado semántico: Estructura accesible y optimizada para SEO, imágenes responsivas y elementos multimedia.',
                'CSS3 y diseño responsivo: Flexbox, Grid, animaciones y propiedades personalizadas.',
                'Bootstrap (v4/5): Componentes personalizados, clases utilitarias y sistema de grillas.',
                'Linux y scripting en consola: Administración de sistemas Ubuntu/CentOS, scripts en Bash, gestión de paquetes (apt/yum) y conexión SSH.',
                'Docker y contenedores: Dockerfiles con múltiples etapas y Docker Compose para microservicios.',
            ],
        ]
    ]
];
