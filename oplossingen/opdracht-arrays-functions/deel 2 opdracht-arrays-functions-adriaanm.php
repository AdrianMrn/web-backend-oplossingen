<?php
$dieren = array("aap", "worm", "eland","varken", "musje");
$aantalDieren = count($dieren);
$teZoekenDier = "geen dier";

	$message = "";

	if (in_array($teZoekenDier, $dieren) == True){
		$message = "Het dier is gevonden.";
	}else{
		$message = "Het dier is niet gevonden.";
	}

	$gesorteerdeDieren = sort($dieren);

	$zoogdieren = array("wolf", "hond","bonobo");
	$dierenLijst = array_merge($dieren, $zoogdieren);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht arrays</title>
    </head>
    <body>

    	<h1>Opdracht array functions - deel 2</h1>

		<p>
			Aantal elementen in array dieren: <?php echo $aantalDieren ?>
		</p>
		<p>
			Zoeken naar het dier...: <?php echo $message ?>
		</p>
		<p>
			Gesorteerde array dieren: <?php var_dump($dieren) ?>
		</p>
		<p>
			Dierenlijst: <?php var_dump($dierenLijst) ?>
		</p>

    </body>
</html>
