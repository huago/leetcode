<?php
// link:https://leetcode-cn.com/problems/reverse-integer/
function reverse($x) {
	$sum = 0;
	while($x != 0) {
		$rest = $x % 10;
		$sum = $sum*10 + $rest;
		$x = intval($x / 10);
	}

	if ($x < -pow(2, 31) || $x > pow(2, 31) - 1) {
		return 0;
	}

	return $sum;
}

$x = -123;
reverse($x);