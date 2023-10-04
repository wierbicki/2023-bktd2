<form method="post">
  <input type="text" name="eingabe" placeholder="Bitte etwas eingeben">
  <button>Absenden</button>
</form>

<?php

$eingabe = $_POST["eingabe"] ?? "nichts";
echo "Sie haben <b>$eingabe</b> eingegeben.";

?>
