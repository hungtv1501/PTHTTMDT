<?php
$a = [1,2,3,7,8,12,35,146,4,5,6,7,8,9];
function sapXep($a)
{
	sort($a);
	for ($i=count($a) - 1; $i >= 0 ; $i--) { 
		# code...
		echo $a[$i]."  ";
	}
}
sapXep($a);