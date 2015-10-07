<?php
	$number = 0;
	$listNumbers = "";
	$listNumbers2 = "";

	while ($number<=100) {
    	$listNumbers .= $number . ", ";
			//Deel 2 van de opdracht
    	if ($number % 3 == 0 && $number > 40 && $number < 80){
    			$listNumbers2 .= $number . ", ";
    	}
    	$number++;
  	}


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>looping while</title>
    </head>
    <body>

    	<h1>Deel 1 while</h1>

		<p>
			1e lijst: <?php echo $listNumbers ?> <br><br>
			2de lijst: <?php echo $listNumbers2 ?>
		</p>

    </body>
</html>
