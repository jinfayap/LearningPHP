<?php

function dd ($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function enterNightClub($age) {
    if ($age >= 21) {
        echo 'Enter night club';
    } else {
        echo 'Not allowed, return home kid';
    }
}