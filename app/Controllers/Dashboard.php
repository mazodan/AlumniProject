<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index() {
        session_start();
        if (isset($_SESSION['login'])) {
            return view('dashboard');
        } else {
            return view('admin_login');
        }
    }
}