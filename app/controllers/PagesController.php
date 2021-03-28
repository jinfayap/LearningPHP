<?php

namespace App\Controllers;

class PagesController {
    
    public function home() {
        // Receive the request
        // Delegate
        //Return a response
        
        // require 'views/index.view.php';
        return view('index');
    }

    public function about() {
        // require 'views/about.view.php';
        $company = 'Laracast';
        return view('about', ['company' => $company]);
    }

    public function contact() {
        // require 'views/contact.view.php';
        return view('contact');
    }

}