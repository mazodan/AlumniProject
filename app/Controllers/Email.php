<?php namespace App\Controllers;

class Email extends BaseController{

  public function email_view(){
    $session = session();
    $_SESSION['alumni_id'] = '123';
    $_SESSION['alumni_firstname'] = 'Alumni';
    $_SESSION['alumni_lastname'] = 'User';
    return view('send_email');
  }

  public function action_send_email(){
    $session = session();
    $email = \Config\Services::email();

    if(!isset($_POST['sendmail'])){
      return view('errors/html/error_404');
    }else{
      $email->setFrom('alumniAdmin@email.com', 'Alumni Admin');
      $email->setTo('toAlumni@email.com');
      $email->setSubject('Email Test');
      $email->setMessage('Test email from localhost codeigniter');
      $email->send();

      echo 'email sent';
      // return view('send_email');
    }
    
  }
}
