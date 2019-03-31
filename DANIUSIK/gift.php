<?php
	include 'include/utilities.php';
	$kids_table = "children";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/*
		*/
		$conn = new db();
		$sql = "INSERT INTO " . $kids_table . 
			" (name,age,city,sex,wishes_text) VALUES (" .
			s($_POST['name']) . "," . $_POST['age'] . "," .
			s($_POST['city']) . "," . s($_POST['gender']) . "," .
			s($_POST['message']) .");" ;
		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
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