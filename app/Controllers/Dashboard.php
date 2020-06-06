<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index() {
        $session = session();
        if (isset($_SESSION['login'])) {
            return view('dashboard');
        } else {
            return redirect()->to('adminlogin');
        }
    }
}