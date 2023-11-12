<?php

date_default_timezone_set("Europe/Berlin");
$timestamp = strtotime("12.11.2023 10:00");

echo "Berlin: ";
echo date("d.m.Y - H:i", $timestamp);

date_default_timezone_set("Asia/Tokyo");
echo "<br>Tokyo: ";
echo date("d.m.Y - H:i", $timestamp);

?>
