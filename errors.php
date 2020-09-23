<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body class="container">

	<!-- <div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div> -->

	<?php

	// ulozime hodnoty do premennych
	$item_count = 5;
	$item_price = 350;

	// vynasobime ich a vysledok ulozime do premennej $sum
	$sum = $item_count * $item_price;

	// premennu $sum vypiseme na stranku
	// cize na stranke sa objavi cislo
	echo $sum;
	echo '<br>';

	$muffins = -2;
	$dumplings = -1;

	if ($muffins > $dumplings) {
		echo "You will have muffins for breakfast dude!";
	} else if ($dumplings > $muffins) {
		echo "Skip breakfast man and have dumplings.";
	} else {
		echo "You are in for a treat fatty, will have lots of food today.";
	};

  echo '<br>';

	$sexToy = "Nafukovacia panna";
	$dildo = "BBD";
	
	if ($sexToy > $dildo){
		echo "You are getting a blow job.";
	} else if($sexToy < $dildo){ 
		echo "You are gonna get you ass fucked.";
	} else {
		echo "The blow up doll will blow you and dildo will fuck your ass.";
	}
	
	echo '<br>';

	//A napíš if, ktorý zistí, či $number je väčšie ALEBO ROVNÉ $min. 
	$number = 5;
	$min = 6;

	if($number )
	

	?>

</body>

</html>