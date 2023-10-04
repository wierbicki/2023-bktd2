<form method="post">
  <input type="number" name="eingabe1" placeholder="Zahl eingeben">
  <input type="number" name="eingabe2" placeholder="Zahl eingeben">
  <button>Berechne</button>
</form>
<?php
$zahl1 = $_POST["eingabe1"] ?? 0;
$zahl2 = $_POST["eingabe2"] ?? 0;
echo "<p>$zahl1 + $zahl2 = ".$zahl1 + $zahl2."!</p>";
?>
