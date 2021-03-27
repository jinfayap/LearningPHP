<?php
// Todo application

// Todo, Comment, User

class Task {

    public $description;
    protected $completed = false;

    public function __construct($description) {
        //Atuomatically triggered on instantiation
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

}

$tasks = [
    new Task ('Go to the store'),
    new Task ('Finish my screen cast'),
    new Task ('Learn laracast')
];

$tasks[0]->complete();

require 'index.view.php';