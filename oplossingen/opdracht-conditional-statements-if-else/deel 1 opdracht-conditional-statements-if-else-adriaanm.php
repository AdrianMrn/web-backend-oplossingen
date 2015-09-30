<?php

	$jaar = 2004;
	$schrikkel = "";

	if ($jaar %4 == 0)
	{
		$schrikkel = "ja";
	} else
	{
		$schrikkel = "nee";
	}

	if ($jaar %100 == 0)
	{
		$schrikkel = "nee";
		if ($jaar %400 == 0)
		{
			$schrikkel = "ja";
		}
	}

?>

<!DOCTYPE html>
<html>
<head><title>opdracht cond statements if adriaanm</title></head>
<body>

	<h1>Deel1</h1>

	<p>
		<?php echo $schrikkel ?>

	</p>

</body>
</html>
