<?php

$nummer = 10;
$antwoord = "";

if ($nummer >= 0 && $nummer < 10)
{
	$antwoord = "tussen 0 en 10";
} elseif ($nummer >= 10 && $nummer < 20 )
{
	$antwoord = "tussen 10 en 20";
}elseif ($nummer >= 20 && $nummer < 30 )
{
	$antwoord = "tussen 20 en 30";
}elseif ($nummer >= 30 && $nummer < 40 )
{
	$antwoord = "tussen 30 en 40";
}elseif ($nummer >= 40 && $nummer < 50 )
{
	$antwoord = "tussen 40 en 50";
}elseif ($nummer >= 50 && $nummer < 60 )
{
	$antwoord = "tussen 50 en 60";
}elseif ($nummer >= 60 && $nummer < 70 )
{
	$antwoord = "tussen 60 en 70";
}elseif ($nummer >= 70 && $nummer < 80 )
{
	$antwoord = "tussen 70 en 80";
}elseif ($nummer >= 80 && $nummer < 90 )
{
	$antwoord = "tussen 80 en 90";
}elseif ($nummer >= 90 && $nummer < 100 )
{
	$antwoord = "tussen 90 en 100";
}

$omgekeerd = strrev($antwoord);

?>

<!DOCTYPE html>
<html>
<head><title>opdracht cond statements if adriaanm</title></head>
<body>

	<h1>Deel1</h1>

	<p>

		<?php echo $antwoord ?> <br>
		<?php echo $omgekeerd ?>

	</p>

</body>
</html>
