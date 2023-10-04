<form method="get">
  <input type="number" name="breite" placeholder="Breite (px)" step="50">
  <input type="color" name="farbe">
  <button>Absenden</button>
</form>

<?php

$breite = $_GET["breite"] ?? "";
$farbe = $_GET["farbe"] ?? "";

echo "<h3>$farbe</h3>";

echo "<div style=\"width:$breite"."px; height:$breite"."px;background-color:$farbe\"></div>";

?>
