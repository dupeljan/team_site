<?php
include 'include/auth.php';
include 'include/utilities.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = new db();

if( isset($_POST['delete_list']) && is_array($_POST['delete_list']) ) {
    foreach($_POST['delete_list'] as $id) {
        $sql = "delete from children where idchildren=" . $id;
		$res = $conn->query($sql);
		$sql = "delete from children_has_wishes where children_idchildren=" . $id;

    }

 }
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
 echo "ERROR";
?>