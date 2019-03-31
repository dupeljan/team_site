<?php
	/**
	 * database handler class
	 */
	class db 
	{	
		private $conn;
		function __construct(){
		  	$servername = "localhost";
			$username = "root";
			$password = "242555";
			$dbname = "mydb";


			// Create connection
			$this->$conn = new mysqli($servername, $username, $password, $dbname);
			//mysql_query("SET NAMES UTF8");
			$this->$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			
		}

		function get_query($sql){
			// return mysqli_result object
			return $this->$conn->query($sql);
		}
	}

	function create_select($name,$mysqli_result,$key){
		echo "<select name=\"" . $name ."\" >";
		if ($mysqli_result->num_rows > 0) {
		   	// output data of each row
		   	while($row = $mysqli_result->fetch_assoc()) {
		   		echo "<option value=\"" . $row[$key] ."\">" . $row[$key] . "</option>";
		   	}
		}
		echo "</select>";
		$mysqli_result->data_seek(0);
	}
	
	function echo_if_not_empty($param){
	if (empty($param)) {
        echo "Param is empty";
    } else {
        echo $param;
        echo "<br>";
    }
}

?>