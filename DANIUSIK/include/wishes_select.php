<?php
	include 'utilities.php';
	$id = "idwishes";
	$key = "caption";
	$conn = new db();
	
	$sql = "SELECT " . $id . " , " . $key . " FROM wishes";
	$result = $conn->query($sql);
	for ($x = 0; $x <= 10; $x++) {	
		create_select("wishes" . $x,$result,$id,$key);
		echo "<br>";
	}
?>