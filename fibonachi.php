<?php
function fibonachi($n) {
	$fib = [1,1];
	for($i = 1; $i < $n; $i++) {
		$fib[$i + 1] = $fib[$i] + $fib[$i - 1];
	}
	return $fib[$n - 1];
}

print fibonachi(7);