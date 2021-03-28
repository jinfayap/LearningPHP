<?php

// get information from the database
// defer to views

$tasks = $app['database']->selectAll("todos");

require 'views/index.view.php';