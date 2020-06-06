<?php namespace App\Controllers;

class Adminauth extends BaseController
{
    public function index() {
        $adminModel = model('App\Models\AdminModel');
        $builder = $adminModel->builder();

        $admin = $adminModel->select('id, password, first_name, last_name')->where(['username' => $this->request->getVar('username')])->findAll();

        $session = session();
        // Check password
        if (count($admin) == 1) {
            // Session config
            

            if (password_verify($this->request->getVar('password'), $admin[0]['password'])){
                // Implement session
                $_SESSION['login'] = true;
                $_SESSION['admin_firstname'] = $admin[0]['first_name'];
                $_SESSION['admin_lastname'] = $admin[0]['last_name'];


                return redirect()->to('dashboard');
            } else {
                $_SESSION['errormsg'] = 'Wrong Password';
                $session->markAsFlashdata('errormsg');
                return redirect()->to('adminlogin');
            }
        } else {
            $_SESSION['errormsg'] = 'Username does not exist';
            $session->markAsFlashdata('errormsg');
            return redirect()->to('adminlogin');
        }

        
    }
}