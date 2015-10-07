<?php
$text = file_get_contents("text-file.txt");
$textchars = str_split($text);
rsort($textchars);
$reverse = array_reverse($textchars);

$counter = array();

foreach($reverse as $value)
{
  if (isset($counter[$value]))
  {
    $counter[$value]++;
  }
  else
  {
    $counter[$value] = 1;
  }

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

    	<h1>foreach</h1>

		<?php //var_dump($reverse) ?>
<pre>
<?php var_dump($counter) ?>
</pre>
    </body>
</html>
