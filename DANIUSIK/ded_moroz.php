<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<?php

	  function connect_to_db(){
	  	$servername = "localhost";
		$username = "root";
		$password = "242555";
		$dbname = "mydb";


		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//mysql_query("SET NAMES UTF8");
		$conn->set_charset("utf8");
		//header('Content-Type: text/html; charset=utf-8')
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		return $conn;
	  }

	  $conn = connect_to_db();
	  for ($x = 0; $x <= 10; $x++) {	
			  echo "<select name=\"wishes\" >";
			  $sql = "SELECT caption FROM wishes";
			  $result = $conn->query($sql);

			if ($result->num_rows > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_assoc()) {
		    		echo "<option value=\"" . $row['caption'] ."\">" . $row['caption'] . "</option>";
		    	}
			}

			echo "</select><br>";
	  }
	 ?>
	
	<br>
	<textarea name="message" rows="10" cols="30">
	The cat was playing in the garden.
	</textarea>
	<br>
	<input type="submit">
</form>



</body>
</html>