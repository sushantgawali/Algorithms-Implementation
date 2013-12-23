<?php

$array_to_sort = array(5,9,8,7,6,3,1,4,6);

do{
	$swapped = false;
	
	for($i = 0 ; $i<9 ; $i++)
	{
		if($array_to_sort[$i]>$array_to_sort[$i+1]){
			list($array_to_sort[$i+1],$array_to_sort[$i]) = array($array_to_sort[$i],$array_to_sort[$i+1]);
			$swapped = true;
		}	
	}

}while($swapped);

print_r($array_to_sort);


