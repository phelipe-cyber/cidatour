<?php
  include('system.class.php');
    
	if (isset($_GET['view'])) {
		$view = $_GET['view'];
	}
	else{
		$view = '';
	}
	$system = new System($view);
?>
