<?php namespace App\Controllers;

class Adminlogin extends BaseController
{
    public function index() {
        // Start the session
        session_start();

        if (isset($_SESSION['login'])) {
            return redirect()->to('dashboard');
        } else {
            return view('admin_login');
        }
    }
}