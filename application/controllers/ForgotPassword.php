<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

  public function index()
  {
    $this->load->view('login/v_forgot_password');
  }

}
