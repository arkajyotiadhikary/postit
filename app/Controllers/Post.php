<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Posts;

class Post extends Controller {

    public function index() {
        return view('posts');
    }

    public function post() {
        return view('post');
    }

    public function addpost() {
        $session = session();
        helper('form');
        $rules = [
            'post_title' => "required",
            'post' => 'required'
        ];
        if ($this->validate($rules)) {
            $postModel = new Posts();
            $data = [
                'post_title' => $this->request->getVar('post_title'),
                'post' => $this->request->getVar('post'),
                'author' => $session->get("username")
            ];
            $postModel->save($data);
            return redirect()->to('/posts');
        } else {
            return view('post', ['validation' => $this->validator]);
        }
    }

}
