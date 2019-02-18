<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hung</title>
	<link rel="stylesheet" href="">
	<style>
		table {
			border: 1px solid black;
		}
		table tr td {
			border-bottom: 1px solid black;
			width: 100px;			
		}
	</style>
</head>
<body>
	<?php
		$a = 5;
		$b = 6;
		$c = 7;
		$delta = $b*$b -4*$a*$c;
		$kq = "";
		if ($delta < 0) {
			# code...
			$kq = "Phuong Trinh Vo Nghiem";
		}
		elseif ($delta == 0) {
			# code...
			$kq = "Nghiem duy nhat = ".(-$b/2*$a);
		}
		else {
			$kq = "x1 = ".(-$b+sqrt($delta)/2*$a)." x2 = ".(-$b-sqrt($delta)/2*$a);
		}
	?>
	<table>
		<tr><td>a = <?=$a;?></td></tr>
		<tr><td>b = <?=$b;?></td></tr>
		<tr><td>c = <?=$c;?></td></tr>
		<tr><td>kq: <?= $kq;?></td></tr>
	</table>
</body>
</html>