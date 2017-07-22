<?php

/*
  $arr = ['a' => 'one', 'b' => 'two', 'c' => 'three'];
  foreach ($arr as $key => $val) {
  echo "$key: $val<br />";
  }
 */

$nums = [1, 2, 3, 4, 5];
foreach ($nums as $key => $val) {
	
	if($key < 2){
		continue;
	}
	
	echo $val;
}


