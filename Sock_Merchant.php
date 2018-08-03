<?php
/* Write your PHP code here */
$ar = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
$n = 9;
$count = 0;
for($i=0;$i<$n;$i++){
	for($j=$i+1;$j<$n;$j++){
		if($ar[$j] == "."){
		}
		elseif($ar[$i] == $ar[$j]){
			$count++;
			$ar[$j] = ".";
			$ar[$i] = ".";
		}
	}
}
echo $count;
?>
