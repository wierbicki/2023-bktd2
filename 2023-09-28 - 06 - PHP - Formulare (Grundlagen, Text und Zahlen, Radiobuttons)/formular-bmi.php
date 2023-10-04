<form method="post">
  <input type="number" name="gewicht" placeholder="Gewicht (kg)" step="0.5" required>
  <input type="number" name="groesse" placeholder="Größe (m)" step="0.01" required>
  <button>BMI berechnen</button>
</form>

<h3>Dein BMI:</h3>

<?php

$gewicht = $_POST["gewicht"] ?? 0;
$groesse = $_POST["groesse"] ?? 1;

echo $gewicht / ($groesse * $groesse);

?>
