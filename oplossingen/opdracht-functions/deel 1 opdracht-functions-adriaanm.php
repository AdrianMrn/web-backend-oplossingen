<?php
function berekenSom($getal1, $getal2)
{
  $resultaat = $getal1 + $getal2;

  return $resultaat;
}

function vermenigvuldig($getal1, $getal2)
{
  $resultaat = $getal1 * $getal2;

  return $resultaat;
}

function isEven($getal)
{
  if ($getal %2 == 0) {
    return true;
  } else {
    return false;
  }

}

function uitbreiding($string)
 	{
 		$arrayUitbreiding = array();
 		$arrayUitbreiding[0] = strlen($string);
 		$arrayUitbreiding[1] = strtoupper($string);
 		return $arrayUitbreiding;
 	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>for</title>
    </head>
    <body>

    	<h1>functions</h1>

        <?= "Cijfers zijn 2 & 7" ?> <br><br>
        <?= "Som = " . berekenSom(2,7) ?> <br>
        <?= "Product = " . vermenigvuldig(2,7) ?> <br>
        Is 5 even? --> <?= isEven(5) ? "true" : "false" ?>


        <p>
        			Uitbreiding: <?php var_dump(uitbreiding("Mijn naam is Adriaan")) ?>
        		</p>


    </body>
</html>
