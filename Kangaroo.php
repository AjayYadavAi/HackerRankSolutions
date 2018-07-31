<?php
//Kangaroo Jump
/* Write your PHP code here */
$jump = array(14,4,98,2);
$x = $jump[0];
$v1 = $jump[1];
$y = $jump[2];
$v2 = $jump[3];
$step = 0;
for($i=0;$i<100000;$i++){
	$x = $x+$v1;
	$y = $y + $v2;
	// If thePrint YES if they can land on the same location at the same time;
	if($x == $y){
		echo "Yes";
		$step = 1;
		break;
	}
}
//otherwise, print NO.
if($step == 0){
	echo "No";
}

?>
