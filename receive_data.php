<?php
$temp = $_GET['temp'];
$hum = $_GET['hum'];

// Save to file or database
file_put_contents("data.txt", "Temp: $temp C, Humidity: $hum %\n", FILE_APPEND);
echo "Data received";
?>
