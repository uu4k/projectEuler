<?php 
function getPrimeNumbers($num) {
	$primeNumbers = array();
	for ($i=2; $i <= $num; $i++) { 
		$isPrime = true;
		foreach ($primeNumbers as $n) {
			if ($i % $n == 0) {
				$isPrime = false;
				break;
			}
		}
		if($isPrime) $primeNumbers[] = $i;
	}

	return $primeNumbers;
}

function getMaxPrimeFactor($num) {
	$primeNumbers = getPrimeNumbers($num);
	rsort($primeNumbers);

	foreach ($primeNumbers as $n) {
		if($num % $n == 0) return $n;
	}

	return null;
}

function getMaxPrimeFactor2($num) {
	$primeNumbers = array();
	$limit = $num;
	for ($i=2; $i <= $limit; $i++) { 
		$isPrime = true;
		foreach ($primeNumbers as $n) {
			if ($i % $n == 0) {
				$isPrime = false;
				break;
			}
		}
		if($isPrime && $num % $i == 0) {
			$primeNumbers[] = $i;
			$limit = $num / $i;
		}
	}

	rsort($primeNumbers);
	return $primeNumbers[0];
}

// echo getMaxPrimeFactor(13195);
$p = isset($argv[1]) ? intval($argv[1]) : 600851475143;
// echo getMaxPrimeFactor($p);
echo getMaxPrimeFactor2($p);
?>