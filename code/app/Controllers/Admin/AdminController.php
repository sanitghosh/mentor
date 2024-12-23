<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }
    public function register()
    {
        return view('admin/register');
    }
    public function adduser(){
        $name = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $cpass = $this->request->getPost('cpass');
        
        $errors = [];

        // Validation
        if (empty($name)) {
            $errors[] = 'Fullname is required';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email address';
        }

        if (empty($password)) {
            $errors[] = 'Password is required';
        }

        if ($password !== $cpass) {
            $errors[] = 'Passwords do not match';
        }

        if (!empty($errors)) {
            return redirect()->to('/admin/register')->withInput()->with('errors', $errors);
        }
        else{
            $user = new \App\Models\User();
            $user->insert([
                'fullname' => $name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'created_at' => \CodeIgniter\I18n\Time::now(),
                'updated_at' => \CodeIgniter\I18n\Time::now(),
            ]);
            return redirect()->to('/admin/login')->withInput()->with('success', 'User registered successfully');
        }

    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // $session = session();
        $user = new \App\Models\User();
        $user = $user->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'user_id' => $user['id'],
                    'name' => $user['fullname'],
                    'is_logged_in' => true
                ]);
                
                return redirect()->to('/admin/dashboard');
                // die();

            }
        }

        return redirect()->to('/admin/login')->withInput()->with('error', 'Invalid email or password');
    }
    public function logout()
    {
        $session = session();
        $session->remove(['user_id', 'name', 'is_logged_in']);
        $session->setFlashdata('success', 'You have been logged out.');
        return redirect()->to('admin/login');
    }
}
