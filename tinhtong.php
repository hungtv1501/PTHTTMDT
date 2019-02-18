<?php
$n = 4;
function tinhTong($n)
{
	$b=0;
	for ($i=1; $i <= $n ; $i++) { 
		# code...
		$b+=1/$i;
	}
	echo $b;
}
tinhTong($n);