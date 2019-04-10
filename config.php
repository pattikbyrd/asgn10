<?php

return [
    'database'  => [
        'name'      =>  'test',
        'username'  =>  'wbip',
        'pass'      =>  'wbip123',
        'connection'=>  'mysql:host=127.0.0.1:8889',
        'options'   =>  [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];