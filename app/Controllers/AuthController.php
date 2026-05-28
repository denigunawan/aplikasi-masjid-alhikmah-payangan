<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    // FORM LOGIN
    public function login()
    {
        return view('auth/login');
    }

    // PROSES LOGIN
    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->user
            ->where('username', $username)
            ->first();

        if (!$user) {

            return redirect()->back()
                ->with('error', 'Username tidak ditemukan');
        }

        if (!password_verify($password, $user['password'])) {

            return redirect()->back()
                ->with('error', 'Password salah');
        }

        session()->set([
            'user_id'  => $user['id'],
            'nama'     => $user['nama'],
            'username' => $user['username'],
            'role'     => $user['role'],
            'logged_in'=> true,
        ]);

        return redirect()->to('/dashboard');
    }

    // LOGOUT
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/masuk');
    }
}