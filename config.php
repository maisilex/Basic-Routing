<?php

return [
    'database' => [
        'name' => 'todos',
        'username' => 'root',
        'password' => 'secret',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
