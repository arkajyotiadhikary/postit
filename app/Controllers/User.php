<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Users;

class User extends Controller {

    public function signin() {
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

    public function adduser() {
        helper('form');
        $rules = [
            'username' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|min_length[4]|max_length[100]|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
        ];
        if ($this->validate($rules)) {
            $userModel = new Users();
            $data = [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        } else {
            return view('signup', ['validation' => $this->validator]);
        }
    }

    public function authuser() {
        $session = session();
        $userModel = new Users();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/posts');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

}
