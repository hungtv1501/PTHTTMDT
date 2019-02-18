<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hung TV</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		define('PI', 3.14);

		echo "Hello world <b> PHP </b> <br>";

		$soThuc = 10.75;
		echo (int)$soThuc."<br>";

		echo PI."<br>";
		
		$varname = "my_varible";
		$$varname = "xyz";
		echo $varname."<br>";
		echo $my_varible."<br>";

		$myvarname = "123";
		$$myvarname = "456";
		echo ${'123'}."<br>";

		$num = 5;
		$result = $num++;
		echo "num = ".$num." and result = ".$result."<br>";
		$num = 5;
		$result = 0;
		$result = ++$num;
		echo "num = ".$num." and result = ".$result."<br>";

		$a = 1;
		echo "Line 1: Bien \$a co gia tri la $a <br>";
		echo 'Line 2: Bien \$a co gia tri la $a <br>';

		$tax = 0.075;
		printf('$%10.2f',$tax);
		?>
	<!-- <script language="php">
		echo "Hello world <b> PHP </b> <br>";
	</script> -->
	<p>Phan HTML</p>
</body>
</html>