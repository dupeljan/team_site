<?php
include 'include/auth.php';
include 'include/utilities.php';
$conn = new db();

$sql = "select * from 
	children JOIN children_has_wishes ON
	idchildren = children_idchildren
	JOIN wishes ON wishes_idwishes = idwishes;";
$res = $conn->query($sql);	

?>
<style type="text/css">
  table.result_table {
  border: 3px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.result_table td, table.result_table th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.result_table tbody td {
  font-size: 13px;
}
table.result_table thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.result_table thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.result_table tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.result_table tfoot td {
  font-size: 14px;
}
</style>

<body>
 <form action="admin_remove.php" method="post">
  <table class="result_table">
   <caption>Таблица писем дедушке Морозу</caption>
   <tr>
    <th>id</th>
    <th>Имя</th>
    <th>Возраст</th>
    <th>Город</th>
    <th>Пожелание</th>
    <th>Пол</th>
    <th>Очки</th>
    <th>Выбор</th>
   </tr>
    <input type="submit" value="удалить выбранные">
   <?php 
   	$attr = array ("idchildren","name","age","city","wishes_text","sex","score");
   	while($row = $res->fetch_assoc()) {
			echo "<tr>";
		   	foreach ($attr as $elem){
		   		echo "<td>";
		   		echo $row[$elem];
		   		echo "</td>";
		   	} 	
   			

   			echo "<td>";
   			echo "<input name=\"delete_list[]\" type=\"checkbox\"  value={$row["idchildren"]}>";
   			echo "</td>";

   			echo "</tr>";

	}
   ?>
 </form>
  </table>
 </body>


