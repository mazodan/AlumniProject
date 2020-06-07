<?php namespace App\Controllers;

class Logout extends BaseController
{
        public function logout_user(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
}