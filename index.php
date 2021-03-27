<?php

require 'functions.php';

$animals = ['dogs', 'cats'];

dd($animals);

// if(enterNightClub(20)) {
//     echo 'Proceed';
// } else {
//     echo 'You are not allowed';
// }

enterNightClub(21);
enterNightClub(20);

require 'index.view.php';