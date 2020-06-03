<?php namespace App\Controllers;

class Adminregistration extends BaseController
{
    public function index() {
        // Access Admin Model
        $adminModel = model('App\Models\AdminModel');

        // Get data and submit it to the model
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getPost('email'),
            'first_name' => $this->request->getPost('firstname'),
            'last_name' => $this->request->getPost('lastname'),
        ];

        $adminModel->insert($data);

        return view('status/registration_success_redirect');
    }
}