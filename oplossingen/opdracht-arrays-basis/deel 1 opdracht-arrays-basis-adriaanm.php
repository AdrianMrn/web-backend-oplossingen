<?php

$dieren = array ("aap","worm","leeuw","nijlpaard","neushoorn","paard","os","koe","bizon","mus");

$dieren2 = array();
$dieren2[0] = "aap";
$dieren2[1] = "worm";
$dieren2[2] = "leeuw";
$dieren2[3] = "nijlpaard";
$dieren2[4] = "neushoorn";
$dieren2[5] = "paard";
$dieren2[6] = "os";
$dieren2[7] = "koe";
$dieren2[8] = "bizon";
$dieren2[9] = "mus";

$voertuigen = array('Landvoertuigen' => array('Vespa','Fiets'),
										'Watervoertuigen' => array('Surfplank','Vlot'),
										'Luchtvoertuigen' => array('Luchtballon','Helikopter'));




?>

<!DOCTYPE html>
<html>
<head><title>opdracht cond statements if adriaanm</title></head>
<body>

	<h1>Deel1</h1>

	<p>
		<b>Array dieren:</b> <?php var_dump($dieren) ?> <br><br>
		<b>Array dieren2:</b> <?php var_dump($dieren2) ?> <br><br>
		<b>Array voertuigen:</b> <?php var_dump($voertuigen) ?> <br><br>


	</p>

</body>
</html>
