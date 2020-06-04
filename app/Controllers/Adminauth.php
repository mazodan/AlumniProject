<?php namespace App\Controllers;

class Adminauth extends BaseController
{
    public function index() {
        $adminModel = model('App\Models\AdminModel');
        $builder = $adminModel->builder();

        $admin = $adminModel->select('id, password')->where(['username' => $this->request->getVar('username')])->findAll();

        // Check password
        if (count($admin) == 1) {
            if (password_verify($this->request->getVar('password'), $admin[0]['password'])){
                // Implement session
                session_start();
                $_SESSION['login'] = true;

                return redirect()->to( base_url('dashboard') );
            } else {
                $data['errormessage'] = "Wrong Password";
                return view('admin_login', $data);
            }
        } else {
            $data['errormessage'] = "Username does not exist";
            return view('admin_login', $data);
        }

        
    }
}