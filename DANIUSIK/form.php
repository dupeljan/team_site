<html>
<body>
<h4>I send</h4>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<select name="cars" >
	  <option value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option value="fiat">Fiat</option>
	  <option value="audi">Audi</option>
	</select>
	<br>
	<textarea name="message" rows="10" cols="30">
	The cat was playing in the garden.
	</textarea>
	<br>
	<input type="submit">
</form>

<h4>I receve</h4>
<?php 
function echo_if_not_empty($param){
	if (empty($param)) {
        echo "Param is empty";
    } else {
        echo $param;
        echo "<br>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo_if_not_empty( $_POST['cars']);
    echo_if_not_empty( $_POST['message']);    
}

?>

</body>
</html>