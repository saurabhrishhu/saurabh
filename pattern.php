<?php

echo "<p> No pattern </p> <br/>";

$a = 1 ;

for( $i=1; $i<=4;$i++){
	for( $j=1;$j<=$i;$j++){
		echo $a ;
		$a++;
	}
	echo "<br/>";
	
}

echo "<p> Star pattern </p> <br/>";

	$a = "*";
	for( $a=1;$a<=10;$a++){
		for($b=1;$b<=$a;$b++){
			echo "*";
		}
		echo "<br/>";
	}


?>

