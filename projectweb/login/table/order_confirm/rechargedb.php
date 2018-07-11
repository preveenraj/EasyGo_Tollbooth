<?php 

echo $_POST["topup"];

$increment=$_POST["topup"];

$x = mysqli_connect("localhost","root","","tollbooth");
$r = "update vehicletable set balance=balance+$increment where rfidno=(select rfidno from current)";
$qr = mysqli_query($x,$r);

mysqli_commit($x);

header("Location: orderindex.php"); 





?>