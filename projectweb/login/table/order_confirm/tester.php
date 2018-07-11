
<?php
// SPECIFY USB PORT TO USE
$usb_comPort = "COM5";

exec("ECHO 1 > $usb_comPort");

echo "data sent";



?>