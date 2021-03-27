<?php


$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Jin fa';

// echo '<pre>';
// die(var_dump($person));
// echo '</pre>';

unset ($person['age']);

require 'index.view.php';