<?php
	include 'include/utilities.php';
	$kids_table = "children";
	$kids_has_wishes = "children_has_wishes";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/*
		*/
		$conn = new db();
		$sql = "INSERT INTO " . $kids_table . 
			" (name,age,city,sex,wishes_text) VALUES " .
			str_parenth(array($_POST['name'],$_POST['age'],$_POST['city'],$_POST['gender'],$_POST['message'])) .";";
		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "SELECT LAST_INSERT_ID();";
		$res = $conn->query($sql);
		$id = $res->fetch_array()[0];
		
		for ($x = 0; $x <= 10; $x++) {	
			$sql = "INSERT IGNORE INTO " . $kids_has_wishes . " VALUES " .
			str_parenth(array($id,$_POST['wishes' . $x])) . ";"; 
			if ($conn->query($sql) === TRUE) {
    			echo "New record to children_has_wishes created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}
		echo_if_not_empty($_POST['name']);
		echo_if_not_empty($_POST['age']);
		echo_if_not_empty($_POST['city']);
		echo_if_not_empty($_POST['gender']);
    	for ($x = 0; $x <= 10; $x++) {	
    		echo_if_not_empty( $_POST['wishes' . $x]);
		}

    	echo_if_not_empty( $_POST['message']);    
	}
?>