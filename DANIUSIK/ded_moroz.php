<html>
<body>

	<h1> 
	 </h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<?php
		include 'include/utilities.php';
		$conn = new db();
		
		$sql = "SELECT caption FROM wishes";
		$result = $conn->get_query($sql);
		for ($x = 0; $x <= 10; $x++) {	
			create_select("wishes" . $x,$result,"caption");
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