<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	// {
		
	// 	$this->output->enable_profiler(TRUE);
	// }
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome');
	}

//if we want session we need to set it here in the "Controller"
	public function process_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required');
		$this->form_validation->set_rules('password', 'Password', 'min_length[6]|required');

		if($this->form_validation->run() === FALSE)
		{
			//die(var_dump(validation_errors()));
			$this->session->set_userdata('login_error', validation_errors());
			redirect(base_url('/main/login'));
		}	
		else
		{
			$this->load->model('User_model');
			$user = $this->User_model->get_user(['email' => $this->input->post('email'), 'password' => $this->input->post('password')]);
			// $user = array('id' => 1,
			// 			  'email' => $_POST['email'],
			// 			  'loging_status'=> TRUE);
			// die(var_dump($user));

			//Test to see if $user has been created
			// var_dump($user);
			// die();
			if(count($user)>0)
			{
				$this->session->set_userdata('user_session', $user);
				redirect(base_url('/main/profile'));
				// $viewdata['user'] = $this->session->userdata('user_session');
				// $viewdata['message'] = 'we have made it to the profile page passing the variable $message';

				// $this->load->view('profile', $viewdata);
			}
			else
			{
				$this->session->set_userdata('error', 'There is no such user in the database.');
				redirect(base_url('/main/login'));
			}
		}
	}
	public function login()
	{

		$data['login_errors'] = $this->session->userdata('login_error');
		// var_dump($data);
		// die();
		$this->load->view('welcome', $data);
	}

	public function register()
	{
		$data['register_errors'] = $this->session->userdata('registration_error');
		$this->load->view('register', $data);
	}

	public function process_register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First_Name', 'valid_first_name|required');
		$this->form_validation->set_rules('last_name', 'Last_Name', 'valid_last_name|required');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'min_length[6]|required');
		$this->form_validation->set_rules('password', 'Confirm_Password', 'min_length[6]|required');

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_userdata('register_error', validation_errors());
			redirect(base_url('/main/register'));
		}	
		else
		{
			// $this->load->library('encrypt');
			$this->load->model('User_model');
			$user = array('first_name'=> $_POST['first_name'],
						  'last_name'=> $_POST['last_name'],
						  'email' => $_POST['email'],
						  'password'=> $_POST['password']);
			//$this->encrypt->encode($this->input->post('password'))
			$this->User_model->register_user($user);
			$view_data['user_info'] = $this->User_model->get_user($user);
			$this->session->set_userdata('user_session', $view_data['user_info']);
			// $view_data['message'] = 'Registration is successful!';

			// $this->load->view('profile', $view_data); //make sure we use correct
			redirect(base_url('/main/profile'));
		}
	}

	public function profile()
	{
		// $this->session->userdata['user_session'];
		// redirect(base_url('/user/profile')); //use this to redirect to my profile page
		$data['user_info'] = $this->session->userdata('user_session');
		$this->load->view('profile', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}
?>