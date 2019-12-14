<?php
	include 'utilities.php';
	$kids_table = "children";
	$kids_has_wishes = "children_has_wishes";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/*
		*/
		$conn = new db();
		$stmt = $conn->get()->prepare("INSERT INTO " . $kids_table . 
			" (name,age,city,sex,wishes_text) VALUES (?,?,?,?,?);" );
		$stmt->bind_param('sdsss',$_POST['name'],$_POST['age'],$_POST['city'],$_POST['gender'],$_POST['message']);
		$stmt->execute();

		$stmt->close();
		
		$id = $conn->insert_id();
		
		for ($x = 0; $x <= 10; $x++) {	
			$sql = "INSERT IGNORE INTO " . $kids_has_wishes . " VALUES " .
			str_parenth(array($id,$_POST['wishes' . $x])) . ";"; 
			$conn->query($sql);
		}

		setcookie("name", $_POST['name']); 	
		setcookie("age", $_POST['age']); 	
		setcookie("city", $_POST['city']); 	
		setcookie("gender", $_POST['gender']); 	
		setcookie("message", $_POST['message']); 	
	}
?>