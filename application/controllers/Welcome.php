<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $userSession = null;

	public function __construct()
	{
		parent::__construct();
		$this->userSession = $this->session->userdata('username');
	}

	public function index()
	{		
		$data['title'] = APPLICATION_NAME;
		if($this->userSession){	
			redirect('/dashboard');
		}
		$this->load->view('login',$data);
	}

	public function login() {
		$Return = array('result'=>'', 'error'=>'');
		

		$email = trim($this->input->post('email'));
		$password = trim($this->input->post('password'));	

		/* Server side PHP input validation */
		// if($email==='') {
		// 	$Return['error'] = "Email field is required.";
		// } elseif($password===''){
		// 	$Return['error'] = "Password field is required.";
		// }

		if($Return['error']!=''){
			output($Return);
		}
	
		$result = TRUE;

		if ($result == TRUE) {
			$session_data = array(
				'email' => 'siddiq'//$email
			);
			// Add user data in session
			$this->session->set_userdata('username', $session_data);
			$Return['result'] = 'Logged In Successfully.';
			output($Return);

		} else {
			$Return['error'] = "Invalid Login Credential.";
			output($Return);
		}
	}

	public function logout(){
		$sess_array = array('username' => '');
		$this->session->sess_destroy();
		$Return['result'] = 'Successfully Logout.';
		redirect('', 'refresh');
	}

}
