
<?php //print_r($title);
// print_r(dashboard_menu());
// print_r($appPageList);
// echo "<pre>"; 
// print_r($all_options); 
foreach( $all_options as $aoKey => $aoValue ){
	$optionsArray[$aoValue['option_name']]['category'] = $aoValue['category_name'];
	$optionsArray[$aoValue['option_name']]['color'] = $aoValue['category_color'];
	$optionsArray[$aoValue['option_name']]['url'] = $aoValue['option_url'];
	$optionsArray[$aoValue['option_name']]['permission'] = $aoValue['permission'];
// 	$optionsArray[$aoValue['category_name']][$aoValue['option_name']] = $aoValue['option_url'];
// 	$optionsArray[$aoValue['category_name']]['color'] = $aoValue['category_color'];
}
// print_r($optionsArray);exit;
?>
<!-- Main content -->
<div class="main">
<div class="container-fluid"><br>
	
<!-- 	<div class="card"> -->
<!-- 		<div class="card-block"> -->
<!-- 			<div class="chart-wrapper"> -->


<!-- 			</div> -->
			<!-- .chart-wrapper END  -->
<!-- 		</div> -->
<!-- 	</div> -->
	<!--/.card-->
	
	<?php 
	$oaCount = count($optionsArray);
// 	echo round($oaCount/4);
	for($i=1; $i < 2; $i++){
		echo '<div class="row" id="myTable">';
		for($j=1;$j<=1;$j++){
			foreach( $optionsArray as $oaKey => $oaValue ){
				echo '<a href="'.$oaValue['url'].'" target="_blank">';
				echo '<div class="col-xxs-12 col-xs-6 col-lg-3">';
				echo '<div class="card card-inverse" style="background-color:'.$oaValue['color'].'">';
				echo '<div class="card-block p-a-0 clearfix text-xs-center">';
				echo '<div class="h5 m-b-0 p-t-1">'.$oaKey.'</div>';
				echo '<div class="text-muted text-uppercase font-weight-bold font-xs">'.$oaValue['category'].'</div>';
				echo '&nbsp;';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</a>';
			}//FOREACH LOOP END
			echo '</div>';
		}//FOR LOOP END
	}//FOR LOOP END
	?>
	

</div>
<!-- /.conainer-fluid -->
</div>

