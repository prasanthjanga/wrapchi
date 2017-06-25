<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Acl_role class
 *  
 */
class Acl_role 
{
	public function __construct()
	{
		$this->CI =& get_instance();
		// Do something with $params
	}
	
	public function sample($userId) 
	{
		echo $userId;
		$this->CI->db->select('Emp_Code');
		$this->CI->db->where('SINO',floatval($userId));
		$sql = $this->CI->db->get('team_information',1);
		$data = $sql->result();
		return $data[0]->Emp_Code;
	}

}