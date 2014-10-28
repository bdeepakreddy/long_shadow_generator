<?php
// if POST request
// if($_POST) {
	$output = shell_exec('fontcustom compile');
	if($output) {
		$path = 'generated/fonts/';
	}
	// #TODO create a unique folder name
																							
	var_dump($output);
	var_dump($path);
// }

?>