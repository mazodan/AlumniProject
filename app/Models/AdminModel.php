<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'Admin';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password', 'email', 'first_name', 'last_name'];

}