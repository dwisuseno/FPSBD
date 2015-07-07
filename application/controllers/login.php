
/* Location: ./application/controllers/welcome.php */<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
     parent::__construct();
     $this->load->model('data_petugas');
     $this->load->helper("html");
     $this->load->helper("form");
     $this->load->helper("text");
     $this->load->model('auth');
     $this->load->library('session');
  }


	public function index()
	{
		$data['title'] = 'FPSBD A20';
		
		$this->load->view('login',$data);
		//$this->load->
	}

	public function auth_login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		if($this->auth->do_auth($email, $pass) == true)
		{
			$newdata = array(
				'email'  => $email,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('admin');
		}
		else
		{
			redirect('login');
		}
	}

}

/* End of file login.php */