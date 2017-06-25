<?php defined('BASEPATH') OR exit('No direct script access allowed');


//Graph Template folder path
function bargraph_path($uri = '') {
	return site_url('assets/graph.v1/') . $uri;
}

function bargraph_js() {
	echo '<script src="'.bargraph_path().'amcharts.js" type="text/javascript"></script>';
	echo '<script src="'.bargraph_path().'serial.js" type="text/javascript"></script>';
	echo '<script src="'.bargraph_path().'plugins/export/export.min.js" type="text/javascript"></script>';
	echo '<link rel="stylesheet" href="'.bargraph_path().'plugins/export/export.css" type="text/css" media="all" />';
	echo '<style type="text/css"> .amcharts-chart-div a {display:none !important;} </style>';
}


function loadbar ( $graphName, $chatData = array(), $x, $y , $height = array() ){
	$bulletsArray = array( "round", "square", "triangleUp", "triangleDown", "bubble", );
	$bulletsArray[array_rand($bulletsArray)];

	//START TO GENERATE RANDOM COLORS FOR EACH EVERY LINE
	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
	$lineColor = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
	//END TO GENERATE RANDOM COLORS FOR EACH EVERY LINE
	?>

<script>
var chart = AmCharts.makeChart( "<?php echo $graphName; ?>", {
	  "type": "serial",
	  "theme": "light",
	  "dataProvider": <?php echo $chatData; ?>,
	  "gridAboveGraphs": true,
	  "startDuration": 0.8,
	  "graphs": <?php echo $y; ?>,
	  "chartCursor": {
	    "categoryBalloonEnabled": false,
	    "cursorAlpha": 0,
	    "zoomable": true,


	    "graphBulletSize": 1.5,
      	"valueZoomable":false,
         "cursorAlpha":0,
         "valueLineEnabled":false,
         "valueLineBalloonEnabled":true,
         "valueLineAlpha":0.3
	  },
	  "categoryField": "<?php echo $x['x']; ?>",
	  "categoryAxis": {
		"labelRotation":45,
	    "gridPosition": "start",
	    "gridAlpha": 0,
	    "tickPosition": "start",
	    "tickLength": 20,

	  },
	  "legend":{
		"useGraphSettings" : true,
	  },
	  "export": {
	    "enabled": true
	  }

	} );
</script>

<div id="<?php echo $graphName; ?>" style="width:100%; height:<?php echo (!empty($height))?$height:'400px'; ?>;"></div>
		
<?php

}