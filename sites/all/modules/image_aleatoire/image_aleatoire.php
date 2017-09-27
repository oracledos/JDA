<?php
	$nbimages = 8;
	$nomimages[1] = "ecole1.png";
	$nomimages[2] = "ecole2.png";
	$nomimages[3] = "ecole3.png";
	$nomimages[4] = "ecole4.png";
	$nomimages[5] = "ecole5.png";
	$nomimages[6] = "ecole6.png";
	$nomimages[7] = "ecole7.png";
	$nomimages[8] = "ecole8.png";
	srand((double)microtime()*100000);
	$affimage = rand(1,$nbimages);
	echo $nomimages[$affimage];
?>
