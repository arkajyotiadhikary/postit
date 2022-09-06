<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Posts;

class Post extends Controller {

    public function index() {
        $session = session();
        $postModel = new Posts();
        $data['posts'] = $postModel->findAll();
        $data['myposts'] = $postModel->where('author', $session->get("username"))->findAll();
        return view('posts', $data);
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

    public function updatepostform($id = null) {
        $postModel = new Posts();
        $data['post'] = $postModel->where('id', $id)->first();
        return view('updatepost', $data);
    }

    public function updatepost($id = null) {
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
            ];
            $postModel->update($id, $data);
            return redirect()->to('/posts');
        } else {
            return view('updatepost', ['validation' => $this->validator]);
        }
    }

    public function deletepost($id = null) {
        $postModel = new Posts();
        $data['post'] = $postModel->where('id', $id)->delete($id);
        return redirect()->to('/posts');
    }

}
