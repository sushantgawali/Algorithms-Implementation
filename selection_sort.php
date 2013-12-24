<?php

$a = array(5,9,4,3,6,8,2,1);

for($i = 0;$i < 8;$i++){

	$min = $i;
	for($j = $i + 1;$j < 8;$j++){

		if($a[$j] < $a[$min]){
			$min = $j;
		}
	}

	if($min!=$j){
		list($a[$i],$a[$min]) = array($a[$min],$a[$i]);
	}
}
print_r($a);
