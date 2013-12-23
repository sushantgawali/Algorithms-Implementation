<?php

$a = array(5,9,4,3,6,8,2,1);

for($i=0;$i<7;$i++){
	
	$j = $i+1;
	$temp = $a[$j];
	
	while($j > 0 && $a[$j-1] > $temp){

		$a[$j] = $a[$j-1];
		$j--;
	
	}
	$a[$j] = $temp;
}

print_r($a);
