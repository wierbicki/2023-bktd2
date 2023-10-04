<form method="get">
  <select name="auswahl">
    <option value="Noch nichts">- Bitte auswählen -</option>
    <option value="Kätzchen">Katze</option>
    <option value="Hündchen">Hund</option>
    <option value="Vögelchen">Vogel</option>
    <option value="Fischchen">Fisch</option>
  </select>
  <button>Absenden</button>
</form>

<h3>Ihre Auswahl:</h3>

<?php

$auswahl = $_GET["auswahl"] ?? "Noch nichts";
echo "Sie haben \"<b>$auswahl</b>\" ausgewählt!";

?>
