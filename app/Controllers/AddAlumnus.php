<?php namespace App\Controllers;

class AddAlumnus extends BaseController
{
    public function index() {
        $session = session();
        if (isset($_SESSION['login'])) {
            return view('add_alumnus');
        } else {
            return redirect()->to('adminlogin');
        }
    }
}