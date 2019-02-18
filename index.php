<!DOCTYPE html>
<html>
<!--Revision History AZZA ELGENDY , MONDAY APRIL 16,2018-->
<head>
	<title>Secret Number</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
	function CreateRadioButtons()
	{
		$radioButtons = array ( "N0"=>"0","N1"=>"1","N2"=>"2","N3"=>"3","N4"=>"4","N5"=>"5","N6"=>"6","N7"=>"7","N8"=>"8","N9"=>"9");
		$nRadio='';
		while(list($k,$v)=each($radioButtons))
		{
			$nRadio.= $v.'<input type="radio" name="guess" value="'.$v.'"/>'."</br>";
		}

		return $nRadio;
	}
?>
	<h1>Number Guessing Game</h1>
	<h1>Guess the Number Then Submit</h1>
	</br></br></br></br>
	<form name="number" id="number" action="guess.php" method="post">
		Enter your Name:<input type="text" name ="name" /><br><br></br>
		
		<?php
			echo CreateRadioButtons();
		?>
		
		
		<input type="hidden" name ="secretNumber" value="9"/>
		
		</br></br>
		<input id="button" type="submit" value="Submit"/>
		
	</form>
</body>
</html>