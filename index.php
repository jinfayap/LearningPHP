<?php


$task = [
    'title' => 'Watch laracast',
    'due' => new DateTime(),
    'assigned_to' => 'Jin fa',
    'completed' => false
]; // title, due, assigned_to, completed

die(var_dump($task));

require 'index.view.php';