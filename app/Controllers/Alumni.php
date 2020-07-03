<?php namespace App\Controllers;

class Alumni extends BaseController
{
	public function dashboard(){
        $session = session();
        $_SESSION['alumni_id'] = '123';
        $_SESSION['alumni_firstname'] = 'Alumni';
        $_SESSION['alumni_lastname'] = 'User';
        return view('alumni_dashboard');
    }
    
    public function account(){
        $session = session();
        $_SESSION['alumni_id'] = '123';
        $_SESSION['alumni_firstname'] = 'Alumni';
        $_SESSION['alumni_lastname'] = 'User';
        $_SESSION['alumni_email'] = 'alumni@user.com';
        $_SESSION['alumni_cpnumber'] = '(+63) 912-345-6789';
        $_SESSION['alumni_birthdate'] = 'January 1, 2020';
        return view('account_info');
    }

	public function password(){
        $session = session();
        $_SESSION['alumni_id'] = '123';
        $_SESSION['alumni_firstname'] = 'Alumni';
        $_SESSION['alumni_lastname'] = 'User';
        $_SESSION['error_msg'] = 'Error here (old password incorrect / password not match)';
        return view('change_password');
    }

    public function email(){
        $session = session();
        $_SESSION['alumni_id'] = '123';
        $_SESSION['alumni_email'] = 'alumni@user.com';
        $_SESSION['alumni_firstname'] = 'Alumni';
        $_SESSION['alumni_lastname'] = 'User';
        $_SESSION['error_msg'] = 'Error here (password incorrect)';
        return view('change_email');
    }

    public function attainment(){
        $session = session();
        $_SESSION['alumni_id'] = '123';
        $_SESSION['alumni_firstname'] = 'Alumni';
        $_SESSION['alumni_lastname'] = 'User';

        $_SESSION['attainments'] = [
            [
                'degree' => 'Degree One',
                'university' => 'University One',
                'year' => 'Year graduated One',
                'honor' => 'Honor/Awards One'
            ],
            [
                'degree' => 'Degree two',
                'university' => 'University two',
                'year' => 'Year graduated two',
                'honor' => 'Honor/Awards two'
            ]
        ];
        return view('educational_attainment');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }

}
