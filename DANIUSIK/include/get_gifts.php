<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = new db();
		$sql = "select idchildren, name, caption,  score from 
	children JOIN children_has_wishes ON
	idchildren = children_idchildren
	JOIN wishes ON wishes_idwishes = idwishes where  idchildren = " . $id;
		
		// Получили список пожеданий 
		$result = $conn->query($sql);

		//Посчитали кол-во очков
		$sum = 0;
		$score_name = "score";
		while ($row = $result->fetch_array()){
			$sum += (int)$row[$score_name];
		} 


		function compute_cost(int $inp){
			return $inp;
		}

		
		function most_exp($cash,$myskli_res){
				$row = $myskli_res->fetch_array();
				$cash_dif = abs($cash - $row["cost"]);  
				$result_row = $row;
				
				while ($row = $myskli_res->fetch_array()){
					$local_cashdif = abs($cash - $row["cost"]);
					if ( $local_cashdif < $cash_dif){
						$cash_dif = $local_cashdif;
						$result_row = $row;
					}
				} 
				
				$myskli_res->data_seek(0);
				return $result_row;
				
		}
		
		// сохранили все подарки
		$sql = "SELECT name, cost FROM gifts";
		$result = $conn->query($sql);
		
		//Максимальное число подарков
		$lim = 5;
		$cash = $sum;
		$answer = "";
		for ($i=0; $i < $lim; $i++) { 
			$gift = most_exp($cash,$result);
			$answer = $answer  . $gift["name"] .", "; 
			$cash -= (int)$gift["cost"];
			
		}

		$answer = rtrim($answer,", ");
		echo quotes_js($answer);
		
	}
?>