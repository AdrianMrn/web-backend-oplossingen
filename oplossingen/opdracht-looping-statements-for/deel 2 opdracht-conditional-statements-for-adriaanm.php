<?php
/*
<?php

$rijen = 10;
$kolommen = 10;



?>

<!doctype html>
<html>

<style>
.oneven {
	background-color = green;
}


</style>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>for</title>
    </head>
    <body>

    	<h1>for</h1>

		<table border = 1px>

<?php

	for($i = 0; $i <= $rijen; $i++)
		{
			echo "<tr>";

			for ($o = 0; $o <= $kolommen; $o++)
			{
				if (($i * $o)%2 == 0)
					{
					echo "<td>" . ($i * $o) . "</td>";
				} else {
					echo "<td class='oneven'>" . ($i * $o) . "</td>";
				}
			}

			echo "</tr>";
		}

?>
		</table>


    </body>
</html>

<?php $rijen=10; $kolommen=10; $cijfer=0; ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Opdracht-concat</title>
</head>
<body>
    <style>
        .green {
            background-color: green;
        }
    </style>
    <table border="1">
        <?php for( $b=0 ; $b < $rijen; ++$b ): ?>
        <tr>
            <?php for( $i=0 ; $i < $kolommen; ++$i ): ?>
            <?php if($cijfer%2==0 ): ?>
            <td>
                <?php echo $cijfer ?>
            </td>
            <?php endif ?>
            <?php if($cijfer%2 !=0 ): ?>
            <td class="green">
                <?php echo $cijfer ?>
            </td>
            <?php endif ?>
            <?php $cijfer++ ?>
            <?php endfor ?>
        </tr>
        <?php endfor ?>
    </table>
</body>
</html>


*/
?>

<?php
	$rijen = 10;
    $kolommen = 10;
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht for</title>
    </head>
    <body>
        <style>
            .green {
                background-color: green;
            }
        </style>
    	<h1>Opdracht for - deel 2</h1>
		<table border="1">

            <?php for($i = 0; $i <= $rijen; $i++): ?>
                    <tr>
                        <?php for($j = 0; $j <= $kolommen; $j++): ?>

                            <?php if(($i*$j)%2 == 0):?>
                                <td> <?= $i * $j ?> </td>
                            <?php endif ?>
                            <?php if(($i*$j)%2 != 0):?>
                                <td class="green"> <?= $i * $j ?> </td>
                            <?php endif ?>
                        <?php endfor ?>
                    </tr>
            <?php endfor ?>

        </table>

    </body>
</html>
