<?php
// Apple and ornage Proble 
/* Write your PHP code here */
$apples = array(-2,2,1);
$oranges = array(5,-6);
//Starting and ending point of the house
$s = 7;
$t = 11;
// Distance of the trees from the house
$a = 5;
$b = 15;
//To store the value
$ap = 0;
$or = 0;
$x = 0;
$y = 0;
for($i=0;$i<count($apples);$i++){
    $x = $apples[$i] + $a;
    if(($x>=$s) && ($x <= $t)){
        $ap = $ap+1;
    }
}
for($j=0;$j<count($oranges);$j++){
    $y = $oranges[$j] + $b;
    if(($y>=$s) && ($y <= $t)){
        $or = $or+1;
    }
}
    echo $ap."\n";
    echo $or;
    
?>
