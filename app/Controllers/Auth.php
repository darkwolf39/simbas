<?php

namespace App\Controllers;

use App\Models\Model_Auth;
use CodeIgniter\Session\Session;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }


    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }


    public function save_register()
    {
        if ($this->validate([
            'nama_user'  => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],
            'email_user' => [
                'label'  => 'E-mail',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],
            'keterangan' => [
                'label'  => 'Keterangan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],
            'repassword' => [
                'label'  => 'Retype Password',
                'rules'  => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                    'matches'  => '{field} Tidak Cocok!!',
                ]

            ]


        ])) {
            // jika valid
            $data = array(
                'nama_user'  => $this->request->getPost('nama_user'),
                'email_user' => $this->request->getPost('email'),
                'keterangan' => $this->request->getPost('keterangan'),
                'password'   => $this->request->getPost('password'),
                'level'      => 2
            );
            $this->Model_Auth->save_register($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil!');
            return redirect()->to(base_url('Auth/register'));
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }


    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }


    public function cek_login()
    {
        if ($this->validate([
            'nama_user'  => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!!',
                ]

            ],

        ])) {
            // Jika valid
            $nama_user = $this->request->getPost('nama_user');
            $password   = $this->request->getPost('password');
            $cek        = $this->Model_Auth->login($nama_user, $password);
            if ($cek) {
                // Jika datanya cocok
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email_user', $cek['email_user']);
                session()->set('foto_user', $cek['foto_user']);
                session()->set('level', $cek['level']);
                // login
                return redirect()->to(base_url('home'));
            } else {
                // Jika datanya cocok
                session()->setFlashdata('pesan', 'Login Gagal!, Nama_user atau Password Tidak Cocok');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // Jika tidak valid

            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }













    // 
    // 
}