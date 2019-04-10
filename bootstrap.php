<?php

// returns an array named config
$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

return new QueryBuilder(
    Connection::make($config['database']) 
);