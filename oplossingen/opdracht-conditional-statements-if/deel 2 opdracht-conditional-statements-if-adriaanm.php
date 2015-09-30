<?php

	$getal = 5;
	$dag = "";



	if ($getal == 1)
	{
		$dag = "Maandag";
	}
	if ($getal == 2)
	{
		$dag = "Dinsdag";
	}
	if ($getal == 3)
	{
		$dag = "Woensdag";
	}
	if ($getal == 4)
	{
		$dag = "Donderdag";
	}
	if ($getal == 5)
	{
		$dag = "Vrijdag";
	}
	if ($getal == 6)
	{
		$dag = "Zaterdag";
	}
	if ($getal == 7)
	{
		$dag = "Zondag";
	}

	$dagUpper = strtoupper($dag);
	$IndexLastA = strrpos($dagUpper, "A");
	$dagUpper[$IndexLastA] = "a";

?>

<!DOCTYPE html>
<html>
<head><title>opdracht cond statements if adriaanm</title></head>
<body>

	<h1>Deel 2</h1>

	<p>
		<?php echo $dagUpper ?>

	</p>

</body>
</html>
