<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {
    public function index() {
        $users = App::get('database')->selectAll("users");

        return view('users', compact('users')); 
        // or use compact('users) ['users' => $users]
    }

    public function store() {
        // Insert the user associated with the request
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        
        // and then redirect back to all users
        return redirect('users');
    }
    
}