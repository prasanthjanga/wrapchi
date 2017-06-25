<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{		
		$data['title']="Welcome to iTEP :: Dashboard Page";
		loadtemplate('dashboard_view',$data);
	}
	
}
