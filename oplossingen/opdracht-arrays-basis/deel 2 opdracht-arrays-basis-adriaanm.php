<?php

//1

$getallen = array(1,2,3,4,5);

//2

$verminigvuldiging = array_product($getallen);

//3

$getallenOneven = array();
if ($getallen[0]%2 != 0)
	{
		array_push($getallenOneven, $getallen[0]);
	}

if ($getallen[1]%2 != 0)
	{
		array_push($getallenOneven, $getallen[1]);
	}

if ($getallen[2]%2 != 0)
	{
		array_push($getallenOneven, $getallen[2]);
	}

if ($getallen[3]%2 != 0)
	{
		array_push($getallenOneven, $getallen[3]);
	}

if ($getallen[4]%2 != 0)
	{
		array_push($getallenOneven, $getallen[4]);
	}

//4 & 5

$getallen2 = array(5,4,3,2,1);
$arraysOpgeteld = array();

for ($i = 0; $i <= 4; $i++)
	{
		$arraysOpgeteld[$i] = $getallen[$i] + $getallen2[$i];
	}

?>

<!DOCTYPE html>
<html>
<head><title>opdracht cond statements if adriaanm</title></head>
<body>

	<h1>Deel1</h1>

	<p>
		<b>Array getallen:</b> <?php var_dump($getallen) ?> <br><br>
		<b>Verminigvuldiging:</b> <?php var_dump($verminigvuldiging) ?> <br><br>
		<b>Array oneven:</b> <?php var_dump($getallenOneven) ?> <br><br>
		<b>Array opgeteld:</b> <?php var_dump($arraysOpgeteld) ?> <br><br>
	</p>

</body>
</html>
