
	<!-- Bootstrap and necessary plugins -->
	<script src="<?php echo template_path(); ?>js/libs/jquery.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/tether.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/bootstrap.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/pace.min.js"></script>

	<!-- Plugins and scripts required by all views -->
	<script src="<?php echo template_path(); ?>js/libs/Chart.min.js"></script>
	<script src="<?php echo template_path(); ?>js/views/shared.js"></script>

	<!-- GenesisUI main scripts -->

	<script src="<?php echo template_path(); ?>js/app.js"></script>

	<!-- Plugins and scripts required by this views -->
	<script src="<?php echo template_path(); ?>js/libs/toastr.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/gauge.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/moment.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/daterangepicker.min.js"></script>

	<!-- Plugins and scripts required by this views -->
	<script src="<?php echo template_path(); ?>js/libs/jquery.dataTables.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/dataTables.bootstrap.min.js"></script>
	<!-- Custom scripts required by this view -->
	<script src="<?php echo template_path(); ?>js/views/tables.js"></script>
	<!-- Custom scripts required by this view -->
	<script src="<?php echo template_path(); ?>js/views/forms.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/jquery.maskedinput.min.js"></script>
	<script src="<?php echo template_path(); ?>js/libs/select2.min.js"></script>
	
	<!-- Plugins and scripts required by this views for calender -->
	<?php calender_js(); // CALENDER FUNCTION START AND END ?>
    <!-- Custom scripts required by this view calender -->
    <?php 
    if($thispage == 'c1' && !empty($calenderAssigned) && !empty($calenderVerfied)){
    	//print_r($calenderData);
    	foreach ($calenderAssigned as $caKey => $caValue ){
    		$caArray[] = array(
    				'title'	=> $caValue['emp_name'],
    				'start'	=> $caValue['support_date'],
    				'end'	=> $caValue['support_date'],
//     				'color'	=> randomColor(),
    				'color'	=> bgColor('A'),
			    	'url'	=> base_url("index.php/ebill/calender/".$caValue['id']),
    				'textColor'	=> '#fff',
    		);
    	}
    	foreach ($calenderVerfied as $cvKey => $cvValue ){
    		$cvArray[] = array(
    				'title'	=> $cvValue['emp_name'],
    				'start'	=> $cvValue['support_date'],
    				'end'	=> $cvValue['support_date'],
//     				'color'	=> randomColor(),
    				'color'	=> bgColor('V'),
			    	'url'	=> base_url("index.php/ebill/calender/".$cvValue['ra_id']),
    				'textColor'	=> '#fff',
    		);
    	}
    	$calenderArray = array_merge( $caArray,$cvArray );
    	$calenderArray = json_encode ($calenderArray);
//     	$caArray = json_encode ($caArray);
//     	$cvArray = json_encode ($cvArray);
//     	print_r($calenderArray);
	    calenderData($calenderArray); // CALENDER FUNCTION START AND END 
    }
    ?>
    
	<!-- Custom scripts required by this view 
	<script src="<?php //echo template_path(); ?>js/views/main.js"></script>-->
	
	<!-- Custom CSS to create circle with percentage required by this CSS -->
	<link rel="stylesheet" href="<?php echo template_path(); ?>css/circle.css">

<style>
/* TO REMOVE CUSTOM RANGE OPTION IN DATE PICKER */
.ranges li:last-child { display: none; }
</style>
</body>


</html>
