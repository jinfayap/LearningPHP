<?php

// get information from the database
// defer to views

$users =App::get('database')->selectAll("users");

require 'views/index.view.php';