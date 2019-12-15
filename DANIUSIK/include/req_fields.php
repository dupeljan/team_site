<?php
function is_empty($elem){
	return $elem == "";
}
$check = array("name" => $_POST["name"],"age" => $_POST['age'],"city" => $_POST['city'],"gender" => $_POST['gender']);
$empty_fields = array_filter($check,"is_empty");
if ( $empty_fields  ){
	// do it if req elements is empty
	
	setcookie("req_fields",json_encode(array_keys($empty_fields)));
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
}else{

setcookie("req_fields",NULL);
}

?>