<?php
function calFactorial($n)
{
	$result = 1;
	for ($i=2; $i <= $n ; $i++) { 
		# code...
		$result *= $i;
	}
	return $result;
}
$n = 4;
echo $n.'!='.calFactorial($n);