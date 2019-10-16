<?php
// link:https://leetcode-cn.com/problems/two-sum/
function twoSum($nums, $target) {
	$len = count($nums);
	if ($len == 0) {
		return array();
	}

	for ($i = 0; $i < $len - 1; $i++) {
		for ($j = $i + 1; $j < $len; $j++) {
			$sum = $nums[$i] + $nums[$j];
			if ($sum == $target) {
				return array($i, $j);
			}
		}
	} 

	return array();
}

function twoSum2($nums, $target) {
	if (count($nums) == 0) {
	    return fasle;
	}
	foreach ($nums as $key => $value) {
	    $sub = $target - $value;
	    $pos = array_search($sub, $nums);
	    if ($pos !== false && $pos >= 0 && $pos != $key) {
		    return array($key, $pos);
	    }
	}
	return array();
}

$nums = array(3, 2, 3);
$target = 6;
$result = twoSum2($nums, $target);
var_dump($result);