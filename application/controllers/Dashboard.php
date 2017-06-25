<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// self::loginCheck(); //TO CHECK USER LOGIN OR NOT
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->model('dashboard_model');
		$this->load->library('uuid');
		$this->load->library('session');
		$this->load->library('acl_role');
		
	}
	
	public function login(){
		$session_data = $this->session->userdata('logged_in');
		if($session_data['loggedin'] == '1' ){
			redirect('index.php/dashboard/index');
		}

		$data['thispage'] = 'l1';
		$data['title'] = 'STEP :: DASHBOARD || Login';
		$this->load->library('form_validation');
		
// 		$pass = 'password';
// 		echo hash('sha256', $pass);
// 		echo '<br>';

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() == FALSE){
			//Field validation failed.  User redirected to login page
			$this->load->view('dashboard/login_view',$data);
		}else{
			//Go to private area
			redirect('index.php/dashboard/index', 'refresh');
		}
		// $this->load->view('dashboard/login_view',$data);
	}

	function check_database($password){
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

		//query the database
		$result = $this->dashboard_model->login($username, $password);
		
		$userRole = array('ROLL_ADMIN'); //TO CHECK USER ROLE 

		if( $result ){
// 			echo $result[0]->ROLE;exit;
// 			if ( in_array($result[0]->ROLE, $userRole) ){
				$sess_array = array();
				foreach($result as $row){
					$sess_array = array(
						'id'		=> $row->ID,
						'username'	=> $row->USERNAME,
// 						'role'		=> $row->ROLE,
						'loggedin'	=> TRUE
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return TRUE;
// 			}else{
// 				$this->form_validation->set_message('check_database', 'This user Role not allowed to access DASHBOARD applicaion.');
// 				return false;
// 			}
		}else{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	
	public function index(){
		self::loginCheck(); //TO CHECK USER LOGIN OR NOT
		$data['thispage'] = 'i1';
		$data['title']="Welcome to STEP :: DASHBOARD Page";
		$data['all_options'] = $this->dashboard_model->get_all_options();
		
		loadtemplate('dashboard/index_dashboard',$data);
	}
	
	public function search_options(){
		self::loginCheck(); //TO CHECK USER LOGIN OR NOT
		$data['all_options'] = $this->dashboard_model->get_all_options();
		
		loadtemplate('dashboard/index_dashboard',$data);
	}
	

	public function profile(){
		self::loginCheck(); //TO CHECK USER LOGIN OR NOT
		$data['thispage'] = 'p1';
		$data['title']="Welcome to STEP :: DASHBOARD Profile Page";
		loadtemplate('dashboard/index_dashboard',$data);
	}
	
	function loginCheck(){
		$session_data = $this->session->userdata('logged_in');
		if($session_data['loggedin'] != '1' ){
			redirect('index.php/dashboard/login');
		}
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		// session_destroy();
		redirect('index.php/dashboard/login', 'refresh');
	}
	
}
// 		$data['ep_by_bc'] = $this->dashboard_model->ep_by_bc('POSTPAID');
// 		$data['ep_by_plan'] = $this->dashboard_model->ep_by_plan('POSTPAID');
// 		$data['ep_by_cp_bc'] = $this->dashboard_model->ep_by_cp_bc('POSTPAID'); //CHECK POINT DATA
// 		$data['ep_by_cp_fail'] = $this->dashboard_model->ep_by_cp_fail('POSTPAID'); //CHECK POINT DATA
// 		$data['unique'] = $this->dashboard_model->get_unique_fail('POSTPAID'); //Unique Issues LIST DATA.
// 		$data['upcoming'] = $this->dashboard_model->get_upcoming('POSTPAID'); //upcoming BC Support LIST DATA.
