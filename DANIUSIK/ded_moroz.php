<html>
<body>

	<h1> 
	 </h1>
<form action="gift.php" method="post">
	<?php
		include 'include/utilities.php';
		$id = "idwishes";
		$key = "caption";
		$conn = new db();
		
		$sql = "SELECT " . $id . " , " . $key . " FROM wishes";
		$result = $conn->get_query($sql);
		for ($x = 0; $x <= 10; $x++) {	
			create_select("wishes" . $x,$result,$id,$key);
			echo "<br>";
		}
	 ?>
	
	<br>
	<textarea name="message" rows="10" cols="30">
	The cat was playing in the garden.
	</textarea>
	<br>
	<input type="submit">
</form>

<h4> I receve </h4>

</body>
</html>