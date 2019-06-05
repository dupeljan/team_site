<?php include 'include/insert_kid.php'; ?>
<script src="scripts/typed.js"></script>
<link href="styles/style.css" rel="stylesheet" type="text/css">
<body style="background: url(styles/come-at-me-bro-santa.gif);">
	<form action="ded_moroz.php">
		<h2>
			
			Дед мороз отвечает:
			<br>
			<img src="styles/ded3.gif">
			<br>
	    	<span class="typed"></span>
			<script type="text/javascript">
				function treat(){
					if ( "male" == <?php echo "\"" . $_POST['gender']. "\""; ?>  ){
				 		var treatment = ["Дорогой", "Уважаемый","Милый"];
				 	}else{
				 		var treatment = ["Дорогая","Уважаемая","Милая"];
				 	}
				 	return treatment[Math.trunc(Math.random()*treatment.length)];
				 }

				 function gratitude(){
				 	var grat = ["Спасибо за поздравления", "Очень приятно слышать такие тёплые слова","Как мило","Мои олени смеялись три дня над твоей шуткой"];
				 	return grat[Math.trunc(Math.random()*grat.length)];
				 }

	            var str =  treat() + " " +  <?php echo "\"" . preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST['name']) . "\""  ;  ?>  + "! " + gratitude() + "." + <?php include 'include/get_gifts.php';?> + " !!!";
				

				var typed = new Typed('.typed',
					{
						strings: [str],
						// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
						stringsElement: null,
						// typing speed
						typeSpeed: 110,
						// time before typing starts
						startDelay: 1200,
						// backspacing speed
						backSpeed: 0,
						// time before backspacing
						backDelay: 500,
						// loop
						loop: false,
						// false = infinite
						loopCount: 0	,
						// show cursor
						showCursor: true,
						// character for cursor
						cursorChar: "|",
						// attribute to type (null == text)
						attr: null,
						// either html or text
						contentType: 'html',
						// call when done callback function
						callback: function() {},
						// starting callback function before each string
						preStringTyped: function() {},
						//callback for every typed string
						onStringTyped: function() {},
						// callback for reset
						resetCallback: function() {}
					});
				
				
				/* function treat(){
				 	var treatment = ["Дорогой", "Уважаемый","Милый"];
				 	document.write(treatment[Math.trunc(Math.random()*3)]);
				 }
				 
				 	treat()



					var typed = new Typed('.element', {
	  					strings: ["First sentence.", "Second sentence."],
	  					typeSpeed: 30
					});
					document.write(typed)
				 	//setTimeout("treat()",1000 );
				 	document.write("<br>")
				 */
			</script>
		<h2>	

	    <input type="submit" value="Попробовать снова" />
	</form>
</body>