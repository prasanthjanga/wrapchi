<?php defined('BASEPATH') OR exit('No direct script access allowed');


//Graph Template folder path
function material_path($uri = '') {
	return site_url('assets/material_ui_kit.v1/') . $uri;
}

function material_js() {
	echo '<script src="'.material_path().'assets/material-components-web.css.js" charset="utf-8"></script>';
	echo '<script src="'.material_path().'assets/material-components-web.js" charset="utf-8"></script>';
}