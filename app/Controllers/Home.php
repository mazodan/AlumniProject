<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		// Determine if there is a user in the admin account.
		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM Admin');
		$results = $query->getResult();
		
		if (count($results) > 0) {
			return view('user_login');
		} else {
			// echo "No admin user";
			return view('admin_registration');
		}

	}

	//--------------------------------------------------------------------

}
