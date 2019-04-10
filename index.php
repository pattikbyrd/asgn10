<?php


 require 'functions.php';

 require 'database/Connection.php';

 require 'Task.php';

$pdo = Connection::make();

$tasks = fetchAllTask($pdo);

require 'index.view.php';