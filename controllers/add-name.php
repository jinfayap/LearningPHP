<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
]);


// redirect in php
header('Location: /');
