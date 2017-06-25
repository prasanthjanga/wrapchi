<?php defined('BASEPATH') OR exit('No direct script access allowed');


//Graph Template folder path
function circlegraph_path($uri = '') {
	return site_url('assets/circle.gauge.v1/') . $uri;
}

function circlegraph_js() {
	echo '<script src="'.circlegraph_path().'raphael-2.1.4.min.js"></script>';
	echo '<script src="'.circlegraph_path().'justgage.js"></script>';
}

function loadcircle($circleId, $circleValue){
	$bulletsArray = array( "round", "square", "triangleUp", "triangleDown", "bubble", );
	
	//START TO GENERATE RANDOM COLORS FOR EACH EVERY LINE 
	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
	$lineColor = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
	//END TO GENERATE RANDOM COLORS FOR EACH EVERY LINE	
?>
<script>
document.addEventListener("DOMContentLoaded", function(event) {

    var dflt = {
      min: 0,
      max: 100,
      donut: true,
      gaugeWidthScale: 0.6,
      counter: true,
      hideInnerShadow: true
    }

    var <?php echo $circleId; ?> = new JustGage({
      id: '<?php echo $circleId; ?>',
      title: 'data-attributes',
      defaults: dflt
    });

});
</script>
<div id="<?php echo $circleId; ?>" class="gauge" data-value="<?php echo $circleValue; ?>"></div>	
<?php

}//loadcircle FUNCTION END

