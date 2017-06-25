<?php defined('BASEPATH') OR exit('No direct script access allowed');

function common($value)
{
    $time=date("d M g:s a",strtotime($value));
    return $time;
}


//Template folder path
function template_path($uri = '') {
	return site_url('html/templates/v1/') . $uri;
}
function loadtemplate($content, $args = array()){
	$ci=& get_instance();
	
	$ci->load->view('dashboard/_sitelayout/header',$args);
	$ci->load->view('dashboard/_sitelayout/header_top',$args);
	$ci->load->view('dashboard/_sitelayout/left_menu',$args);
	$ci->load->view($content, $args);
	$ci->load->view('dashboard/_sitelayout/footer_top',$args);
	$ci->load->view('dashboard/_sitelayout/footer',$args);
}

function managertemplate($content, $args = array()){
	$ci=& get_instance();
	
	$ci->load->view('dashboard/_sitelayout/header',$args);
	$ci->load->view('dashboard/_sitelayout/header_top',$args);
	$ci->load->view('dashboard/_sitelayout/left_manager_menu',$args);
	$ci->load->view($content, $args);
	$ci->load->view('dashboard/_sitelayout/footer_top',$args);
	$ci->load->view('dashboard/_sitelayout/footer',$args);
}

function jira_issues(){
	$url="https://ytlcomms.jira.com/rest/api/2/search/?jql=project=LEB";
	$username="Vijay.Ramakumar@Xchanging.com";
	$password="v!j@ybr21";
	
	$curl = curl_init();
	
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . base64_encode("$username:$password")) );
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_VERBOSE, true);
	
	$verbose = fopen('php://temp', 'rw+');
	curl_setopt($curl, CURLOPT_STDERR, $verbose);
	
	$issue_list = (curl_exec($curl));
	$result = json_decode($issue_list, true);
// 	echo '<pre>';
	// 		print_r($result);
	// 		print_r($result['issues'][0]['key']);
// 	return $result['issues'];
	foreach( $result['issues'] as $issKey => $issValue ){
		$issueArray[] = $result['issues'][$issKey]['key'];
	}
	return $issueArray;
}