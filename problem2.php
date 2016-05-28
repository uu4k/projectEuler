<?php
function fibonatti($num = 10) {
	if($num == 0) return 1;
	if($num == 1) return 2;

	return fibonatti($num-1) + fibonatti($num-2);
}

function fibonattiSum($limit = 10) {
	$sum = 0;
	for ($i=0; $f < $limit; $i++, $f = fibonatti($i)) { 
		if($f % 2 == 0) $sum += $f;
	}
	return $sum;
}

// echo fibonattiSum(90);
$p = isset($argv[1]) ? intval($argv[1]) : 4000000;
echo fibonattiSum($p);
?>