<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
		
	function __construct() {
		parent::__construct();
		
	}
	
	function get_addressbook() {
		$query = $this->db->get('addressbook');
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}
	

// 	function login($username, $password){ // LOCALHOST - HOSTING LOGIN
// 		$this->db->select('ID, USERNAME, PASSWORD');
// 		$this->db->from('USERS');
// 		$this->db->where('USERNAME', $username);
// 		$this->db->where('PASSWORD', md5($password));
// 		$this->db->limit(1);

// 		$query = $this->db->get();

// 		if($query->num_rows() == 1){
// 			return $query->result();
// 		}else{
// 			return false;
// 		}
// 	}
	
	function login($username, $password){ // SERVER - HOSTING LOGIN
// 		$CI = &get_instance();
// 		$this->pmas = $CI->load->database('pmas', TRUE);
// 		$this->pmas->select('ID, USERNAME, PASSWORD,ROLE');
// 		$this->pmas->from('USERS');
// 		$this->pmas->where('USERNAME', $username);
// 		$this->pmas->where('PASSWORD', hash('sha256', $password));
// 		$this->pmas->limit(1);
	
// 		$query = $this->pmas->get();

		$CI = &get_instance();
		$this->pmas = $CI->load->database('pmas', TRUE);
		$this->pmas->select('SINO AS ID, Emp_Code AS USERNAME, PASSWORD, ROLE');
		$this->pmas->from('TEAM_INFORMATION');
		$this->pmas->where('Emp_Code', $username);
		$this->pmas->where('PASSWORD', hash('sha256', $password));
		$this->pmas->limit(1);
		
		$query = $this->pmas->get();
	
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
	
	
	function get_role($username, $password){
		$this->db->select('SINO,Emp_Code,Emp_Name,Reporting_To,Designation,Client,Projects,Email_Id');
		$this->db->from('team_information');
		$this->db->where('Emp_Code', $username);
		$this->db->where('PASSWORD', hash('sha256', $password));
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function get_all_options(){
		$this->db->select('option_url.option_name,
				option_url.category_id,
				option_url.option_url,
				option_url.permission,
				option_category_list.category_name,
				option_category_list.category_color');
		$this->db->from('option_url');
		$this->db->join('option_category_list', 'option_category_list.id = option_url.category_id', 'INNER');
		$this->db->where('option_url.deleted', '0');
		$this->db->where('option_category_list.deleted', '0');
		
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}
	

	
	
	
}
/*END OF FILE*/
