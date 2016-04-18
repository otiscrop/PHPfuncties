<?php
	if($_POST) {  		//refereerd naar method post.
	$celcius = $_POST['celcius'];		//celcius = celcius
	$fahrenheit =($celcius / 5* 9)+32;  		//celcius naar fahrenheit
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title> C > F </title>
	</head>
	<body>
		<center>
			<h1> Celcius naar Fahrenheit </h1>
		<form action="" method="post">
		Celcius: <input type="text" name="celcius" /><br>
		
		<?php
		
			if(isset($fahrenheit)){
				echo "fahrenheit = ".$fahrenheit;
			}
		?>
		</form>
		</center>
	</body>
</html>		