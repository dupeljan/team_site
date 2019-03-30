
<?php
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
echo "Connected successfully";

$sql = "SELECT caption FROM wishes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<br>" . $row['caption'] ;
    }
} else{
	echo "empty";
}
$conn->close();
?>