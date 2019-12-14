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
<?php 
	function get_cookie($name){
		if ($_COOKIE[$name]){ 
			echo  $_COOKIE[$name] ; 
		} 	
	}
?>
<form action="gift.php" method="post">
	<h1>Дорогой Дедушка Мороз!</h1> 
	<input type="hidden" name="example" value="data1">
	<h2>Меня зовут</h2>
	<input name="name" type="text" value= "<?php get_cookie("name")?>" required><br>
	<h2>Мне уже исполнилось</h2>
	<input name="age" type="number" min="0" value= "<?php get_cookie("age")?>" required><br>
	<h2>Я из города</h2>
	<input name="city" type="text" value= "<?php get_cookie("city")?>" required><br>
	<h2>
  	<input type="radio" name="gender" value="male"  <?php if ( $_COOKIE["gender"] == "male") { echo "checked";}?> > Мальчик<br>
 	<input type="radio" name="gender" value="female" <?php if ( $_COOKIE["gender"] == "female") { echo "checked";}?> > Девочка<br>
	</h2>

	<h1>Желаю тебе, Дедушка Мороз:</h1>

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