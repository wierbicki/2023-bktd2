<form method="get">
  <select name="auswahl">
    <option value="Noch nichts">- Bitte auswählen -</option>
    <option>Katze</option>
    <option>Hund</option>
    <option>Vogel</option>
    <option>Fisch</option>
  </select>
  <button>Absenden</button>
</form>

<h3>Ihre Auswahl:</h3>

<?php

$auswahl = $_GET["auswahl"] ?? "Noch nichts";
echo "Sie haben \"$auswahl\" ausgewählt!";

?>
