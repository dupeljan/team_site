<?php 
 if(isset($_COOKIE["req_fields"])){
 	$req_fields = json_decode($_COOKIE["req_fields"],true);
 	$message = "Хохо, пожалуйста, введи " ;
 	//if (! is_array($req_fields))
 	//	echo "Проблема";
 	foreach ($req_fields as $elem) {
 	 	switch ($elem){
 	 		case "name": 
 	 		$message = $message . "имя, ";
 	 		break;
 	 		case "age": 
 	 		$message = $message . "возраст, ";
 	 		break;
 	 		case "city": 
 	 		$message = $message . "город, ";
 	 		break;
 	 		case "gender": 
 	 		$message = $message . "пол, ";
 	 		break;
 	 		default:
 	 		$message = $message . $elem . ", ";
 	 	}
 	 }

 	 echo "<h1>" . substr($message, 0,-2	) . " !!!" ."</h1>"; 
 }

?>