<?php

require 'database/Connection.php';
require 'database\QueryBuilder.php';
$config = require 'config.php';

return new QueryBuilder(
    Connection::make($config['database'])
);

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);