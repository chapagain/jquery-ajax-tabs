<?php
	$p = $_GET['id'];

	switch($p) {
		case "1":
		echo '<h2>Google</h2>Content goes here !<br style="clear:both;" />';
		break;
					  
		case "2":
		echo 'Yahoo content ?<br style="clear:both;" />';
		break;

		case "3": 
		echo 'My hotmail content goes here...<br style="clear:both;" />';
		break;

		case "4": default:
		echo 'Twitter status update :)<br style="clear:both;" />';
		break;
	}
?>