<?php
function sumMultiple($num,$limit=1000) {
	$sum = 0;
	for($i = $num; $i < $limit; $i += $num) {
		$sum += $i;
	}
	return $sum;
}

function execProblem($limit=1000) {
	return sumMultiple(3,$limit) + sumMultiple(5,$limit);
}

// echo execProblem(10);
$p = isset($argv[1]) ? intval($argv[1]) : 1000;
echo execProblem($p);
?>