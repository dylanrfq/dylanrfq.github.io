<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        return view('login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $users = [
            'dylan' => 'dylan123',
            'user'  => 'user123'
        ];

        if (isset($users[$username]) && $users[$username] === $password) {
            session()->set([
                'username'   => $username,
                'isLoggedIn' => true
            ]);
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', 'Username atau Password salah.');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProcess()
    {
        // Simulasi register
        return redirect()->to('/login')->with('success', 'Registrasi berhasil (Simulasi). Silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
