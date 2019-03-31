<!DOCTYPE html>
<html>
<body>

<h1>Я</h1>
<form action="gift.php" method="post">
	<input type="hidden" name="example" value="data1">
	<h4>ФИО</h4>
	<input name="name" type="text" required><br>
	<h4>возраст</h4>
	<input name="age" type="number" required><br>
	<h4>из города</h4>
	<input name="city" type="text" required><br>
	
  	<input type="radio" name="gender" value="male" checked> Мальчик<br>
 	<input type="radio" name="gender" value="female"> Девочка<br>
	

	<h1>Желаю Дедушке Морозу</h1>

	<?php include 'include/wishes_select.php';?>
	<h1>И хочу сказать</h1>
	<textarea name="message" rows="10" cols="30">С Новым Годом!</textarea>
	<br>
	<input type="submit">
</form>

<h4> I receve </h4>

</body>
</html>