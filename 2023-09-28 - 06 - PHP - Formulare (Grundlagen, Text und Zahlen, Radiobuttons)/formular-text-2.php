<form method="post">
  <input type="text" name="eingabe" placeholder="Bitte etwas eingeben">
  <button>Absenden</button>
</form>

Sie haben <b><?= $_POST["eingabe"] ?? "nichts" ?></b> eingegeben.

