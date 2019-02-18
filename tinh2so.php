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
		$a = 2;
		$b = 3;
		function tong($a,$b)
		{
			return $a+$b;
		}
		function hieu($a,$b)
		{
			return $a-$b;
		}
		function tich($a,$b)
		{
			return $a*$b;
		}
		function thuong($a,$b)
		{
			return $a/$b;
		}
		function sodu($a,$b)
		{
			return $a%$b;
		}
	?>
	<table>
		<tr><td>a = <?=$a;?></td></tr>
		<tr><td>b = <?=$b;?></td></tr>
		<tr><td>Tong = <?=tong($a,$b);?></td></tr>
		<tr><td>Hieu = <?=hieu($a,$b);?></td></tr>
		<tr><td>Tich = <?=tich($a,$b);?></td></tr>
		<tr><td>Thuong = <?=thuong($a,$b);?></td></tr>
		<tr><td>So du = <?=sodu($a,$b);?></td></tr>
	</table>
</body>
</html>