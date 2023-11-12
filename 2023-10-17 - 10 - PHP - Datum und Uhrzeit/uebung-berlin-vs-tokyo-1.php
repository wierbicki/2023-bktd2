<?php

date_default_timezone_set("Europe/Berlin");
echo "Berlin: ";
echo date("d.m.Y - H:i");

date_default_timezone_set("Asia/Tokyo");
echo "<br>Tokyo: ";
echo date("d.m.Y - H:i");

?>
