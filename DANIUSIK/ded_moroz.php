<!DOCTYPE html>
<html>
<html>

	<head>
			<meta charset="utf-8">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
			<link href="styles/style.css" rel="stylesheet" type="text/css">
			<title>
				Пожелания для Деда Мороза
			</title>
			
			
	</head>
<header>
	<div class=site_header>
	Официальный сайт Дедушки Мороза ФКТиПМ
	</div>
</header>	
<body>


<form action="gift.php" method="post">
	<h1>Я</h1>
	<input type="hidden" name="example" value="data1">
	<h2>ФИО</h2>
	<input name="name" type="text" required><br>
	<h2>Возраст</h2>
	<input name="age" type="number" min="0" required><br>
	<h2>Из города</h2>
	<input name="city" type="text" required><br>
	<h2>
  	<input type="radio" name="gender" value="male" checked> Мальчик<br>
 	<input type="radio" name="gender" value="female"> Девочка<br>
	</h2>

	<h1>Желаю Дедушке Морозу</h1>

	<?php include 'include/wishes_select.php';?>
	<h1>И хочу сказать</h1>
	<textarea name="message" rows="1">С Новым Годом!</textarea>
	<br>
	<h1>
	<input type="submit"  value="Отослать письмо Дедушке Морозу"/> 
	</h1>
</form>


</body>
</html>