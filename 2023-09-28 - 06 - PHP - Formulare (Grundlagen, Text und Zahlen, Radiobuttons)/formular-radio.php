<form method="post">
  <label><input type="radio" name="gender" value="Männlich">Mann</label>
  <label><input type="radio" name="gender" value="Weiblich">Frau</label>
  <label><input type="radio" name="gender" value="Divers">Divers</label>
  <button>Absenden</button>
</form>

<h3>Ihre Auswahl:</h3>

<?php

$gender = $_POST["gender"] ?? "";
echo "$gender";

?>
