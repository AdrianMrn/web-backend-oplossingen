
<?php
  $fruit = 'ananas';
  $fruitLen = strlen($fruit);
  $fruitPos = strrpos($fruit, 'a');
  $fruitUpper = strtoupper($fruit);

  $lettertje = 'e';
  $cijfertje = 3;
  $langsteWoord = 'zandzeepsodemineralenwatersteenstralen';

  $langsteWoordReplaced = str_replace($lettertje, $cijfertje, $langsteWoord);
?>

<!DOCTYPE html>
<html>
<head><title>opdracht string extra functions adriaan marain</title></head>
<body>
<h1>oplossing string extra functions door adriaan marain</h1>

<h2>Deel 3</h2>

<p>
  Replaced: <?php echo $langsteWoordReplaced ?>
</p>

</body>
</html>
