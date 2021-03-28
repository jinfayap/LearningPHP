<?php

// get information from the database
// defer to views

$users = $app['database']->selectAll("users");

require 'views/index.view.php';