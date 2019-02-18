<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hung</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$n = 100;
		// $a = [];
		function fibonacci($n)
		{
			$a = 1;
			$b = 1;
			echo $a."  ".$b."  ";
			for ($i=2; $i <= $n ; $i++) { 
				# code...
				$c = $a + $b;
				$a = $b;
				$b = $c;
				echo $c."  ";
				if ($i%10 == 0) {
					# code...
					echo "<br>";
				}
			}
		}
		fibonacci($n);
	?>
</body>
</html>