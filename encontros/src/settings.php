<?php

// Carregar variáveis do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); //diretorio raiz
$dotenv->load();

// Retornar configurações carregadas
return [
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'logger' => [
            'name' => 'Encontros Universitarios',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'app.log',
        ],
        'db' => [
            'type' => $_ENV['DB_TYPE'],         // Carregado do .env
            'host' => $_ENV['DB_HOST'],         // Carregado do .env
            'user' => $_ENV['DB_USER'],         // Carregado do .env
            'pass' => $_ENV['DB_PASSWORD'],    // Carregado do .env
            'dbname' => $_ENV['DB_NAME'],      // Carregado do .env
            'port' => $_ENV['DB_PORT']         // Carregado do .env
],
        'api' => 'http://n2s.russas.ufc.br:8080/digital-valley-restapi/evento/{id_evento}/trabalho'
    ]
];

