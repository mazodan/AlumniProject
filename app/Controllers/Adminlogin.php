<?php namespace App\Controllers;

class Adminlogin extends BaseController
{
    public function index() {
        // Access Admin Model
        $adminModel = model('App\Models\AdminModel');
    }
}