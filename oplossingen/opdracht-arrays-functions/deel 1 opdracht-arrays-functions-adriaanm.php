<?php
	$dieren = array("aap", "worm", "eland","varken", "musje");
	$aantalDieren = count($dieren);
	$teZoekenDier = "geen dier";

	$message = "";

	if (in_array($teZoekenDier, $dieren) == True){
		$message = "Het dier is gevonden!";
	}else{
		$message = "Het dier is niet gevonden!";
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht arrays</title>
    </head>
    <body>

    	<h1>Deel 1 arrays functions</h1>

		<p>
			# elementen in array dieren: <?php echo $aantalDieren ?>
		</p>
		<p>
			Zoeken naar het dier: <?php echo $message ?>
		</p>

    </body>
</html>
