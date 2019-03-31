<?php
	include 'include/utilities.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	for ($x = 0; $x <= 10; $x++) {	
    		echo_if_not_empty( $_POST['wishes' . $x]);
		}
		
    	echo_if_not_empty( $_POST['message']);    
	}
?>