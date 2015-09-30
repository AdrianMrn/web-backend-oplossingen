
<?php
  $fruit = 'ananas';
  $fruitPos = strrpos($fruit, 'a');
  $fruitUpper = strtoupper($fruit);

?>
<!DOCTYPE html>
<html>
<head><title>opdracht string extra functions adriaan marain</title></head>
<body>
<h1>oplossing string extra functions door adriaan marain</h1>

<h2>Deel 2</h2>

<p>
  Waar is de laatste letter a? <?php echo $fruitPos ?> <br>
  Het fruit in uppercase: <?php echo $fruitUpper ?>
</p>

</body>
</html>
