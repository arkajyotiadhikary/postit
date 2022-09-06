<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Post extends Controller {

    public function index() {
        return view('posts');
    }
}
