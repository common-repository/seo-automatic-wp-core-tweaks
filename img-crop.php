<?php
//Turn organization of uploads into year and month off
if ($_REQUEST['action'] == "changecore") {
	 if ($_REQUEST['img_crop'] == "ON") {
		if ( (!update_option('thumbnail_crop','')) ) {
			$fail .= "<li>The crop thumbail option was not changed, since it was already off.</li>";
		} else {
			$success .= "<li>Crop thumbnail to exact dimensios is turned off.</li>";
		}
	} else {
		//update_option('uploads_use_yearmonth_folders','1');
		$notused .= "<li>Crop thumbnail to exact dimensions.</li>";
	} 
} else {
	$options .= "<li><input name=\"img_crop\" type=\"checkbox\" value=\"ON\" checked /> Turn OFF Crop thumbnail to exact dimensions.</li>";
}
?>