<?php namespace App\Controllers;

class Adminauth extends BaseController
{
    public function index() {
        $adminModel = model('App\Models\AdminModel');
        $builder = $adminModel->builder();

        $admin = $adminModel->select('id, password')->where(['username' => $this->request->getVar('username')])->findAll();

        // Check password
        if (count($admin) == 1) {
            echo count($admin);
        } else {
            $data['errormessage']   = "Username does not exist";
            return view('admin_login', $data);
        }

        
    }
}