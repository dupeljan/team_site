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
		/*
		$lim = 5;
		$cash = $sum;
		$answer = "";
		for ($i=0; $i < $lim; $i++) { 
			$gift = most_exp($cash,$result);
			$answer = $answer  . $gift["name"] .", "; 
			$cash -= (int)$gift["cost"];
			
		}
		*/
		function sign($n) {
    		return ($n > 0) - ($n < 0);
		}

		// cash is amount of sum
		$cash = abs($sum);
		$gift_list = new \Ds\Vector();

		// push only gift with equal sign
		while ($row = $result->fetch_array()){
			if ( sign((int)$row['cost']) == sign($sum)){
				$gift_list->push(array((int)$row['cost'],$row['name']));
			}
		}

		$result_vect = new \Ds\Vector();
		while ( ! $gift_list->isEmpty() and $cash != 0  ){
			// Choose random index
			$rand_gift = rand(0,$gift_list->count()-1);
			// If enough money
			if ( $cash - abs($gift_list[$rand_gift][0])  >= 0){
				// Gift it
				$result_vect->push($gift_list[$rand_gift][1]);
				$cash -= abs($gift_list[$rand_gift][0]);
			}
			else{
				// Remove from gift list
				$gift_list->remove($rand_gift);
			}
		}

		$answer = "";
		
		// Prepare answer
		if($sum < -30){
			$answer = "Ты ужасный ребенок, дьявол во плоти!";
		}elseif ($sum < 0) {
			$answer = "В прошлом году ты вел себя не очень хорошо.";
		}elseif($sum < 20){
			$answer = "В прошлом году ты вел себя неплохо.";
		}elseif ($sum < 50) {
			$answer = "Ты отличный ребенок! Побольше бы таких деток.";
		}else{
			$answer = "Ты слишком хорош.. Чувствую подвох. Я конечно ценю доброжелательных детей, но чтобы настолько! Наверное ты негодяй.. но ладно. На этот раз я тебя прощаю, но в следующем семестре я буду за тобой следить!";
		}
		
		//  Insert xoxo randomly in text
		$xoxo = "Хо-Хо ";
		$xoxo_count =  rand(3,10);
		$xoxo_vector = new \Ds\Vector();
		for ($i=0; $i <= $xoxo_count; $i++) { 
			$xoxo_vector->push(rand(0,$result_vect->count()-1));
		}

		for ($i=0; $i <  $result_vect->count(); $i++) { 
			//echo "string";
			while( $xoxo_vector->find($i) ){
				$answer = $answer . $xoxo;
				$xoxo_vector->remove($xoxo_vector->find($i));
			}

			$answer = $answer . $result_vect[$i] . ", ";
			
		}

		$answer = rtrim($answer,", ");
		echo quotes_js($answer);
		
	}
?>