<?php
	header("Content-type: text/css");
	
	//Include wp-load.php
	include('../../../../wp-load.php');
	
	echo get_option('custom_theme_css');