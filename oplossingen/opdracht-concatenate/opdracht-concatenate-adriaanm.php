
<?php

$voornaam = "Adriaan";
$achternaam = "Marain";

$volledigeNaam = $voornaam . " " . $achternaam;

$volledigeNaamLen = strlen($volledigeNaam);

?>
<!DOCTYPE html>
<html>
<head><title>opdracht concatenate adriaan marain</title></head>

<body>
<h1>opdracht concatenate adriaan marain</h1>

<p>
  <?php echo $volledigeNaam ?>
</p>

<p>
  Lengte van $volledigeNaam =
  <?php echo $volledigeNaamLen ?>
</p>

</body>
</html>
