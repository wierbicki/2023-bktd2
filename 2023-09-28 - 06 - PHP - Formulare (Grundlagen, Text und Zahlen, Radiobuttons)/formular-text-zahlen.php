<form method="post">
  <input type="text" name="name" placeholder="Vor- und Nachname">
  <input type="number" name="gewicht" placeholder="Gewicht (kg)" step="0.5">
  <input type="number" name="groesse" placeholder="Größe (cm)">
  <button>Absenden</button>
</form>

<h3>Ausgabe:</h3>

<?php

$name = $_POST["name"] ?? "";
$gewicht = $_POST["gewicht"] ?? "";
$groesse = $_POST["groesse"] ?? "";

echo "<b>Name</b>: $name | <b>Gewicht</b>: $gewicht | <b>Größe</b>: $groesse";

?>
