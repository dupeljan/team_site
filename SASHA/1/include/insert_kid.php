<?php
	include 'utilities.php';
	$kids_table = "children";
	$kids_has_wishes = "children_has_wishes";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/*
		*/
		$conn = new db();
		$sql = "INSERT INTO " . $kids_table . 
			" (name,age,city,sex,wishes_text) VALUES " .
			str_parenth(array($_POST['name'],$_POST['age'],$_POST['city'],$_POST['gender'],$_POST['message'])) .";";
		$conn->query($sql);
		
		$id = $conn->insert_id();
		
		for ($x = 0; $x <= 10; $x++) {	
			$sql = "INSERT IGNORE INTO " . $kids_has_wishes . " VALUES " .
			str_parenth(array($id,$_POST['wishes' . $x])) . ";"; 
			$conn->query($sql);
		} 	
	}
?>