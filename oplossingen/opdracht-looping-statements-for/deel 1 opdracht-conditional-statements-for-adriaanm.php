<?php

$rijen = 10;
$kolommen = 10;



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>for</title>
    </head>
    <body>

    	<h1>for</h1>

		<table border = 1px>

<?php

	for($i = 1; $i <= $rijen; $i++)
		{
			echo "<tr>";

			for ($o = 1; $o <= $kolommen; $o++)
			{
				echo "<td>kolom</td>";
			}

			echo "</tr>";
		}

?>
		</table>


    </body>
</html>
