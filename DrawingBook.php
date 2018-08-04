<?php
/* Write your PHP code here */
$n = 6;
$p = 2;
$step = 0;
$step1=0;
for($i=1;$i<=$n;$i++){
	if($p == 1){
		break;
	}
	if($p>$i){
		$i = $i+1;
		$step++;
	}
}

if($n % 2 ==0){
    for($i=$n;$i>1;$i--){
    	if($p == $n){
			break;
		}
		if($p<$i){
			$step1++;
			$i= $i-1;
		}
}
}
else{
	for($i=$n;$i>1;$i--){
    	if(($p == $n) ||  ($p == $n-1)){
			break;
		}
		$i= $i-1;
		if($p<$i){
			$step1++;
		}
}
}
if($step>$step1){
    echo $step1;
}else{
    echo $step;
}
?>
