
<?PHP 


$x = mysqli_connect("localhost","root","","tollbooth");
$r = "select * from current";
$qr = mysqli_query($x,$r);
/* 
$s=mysqli_fetch_array($qr);
echo $s['rfidno'];
 */



if($s=mysqli_fetch_array($qr))
{
// echo "hello";
// echo $s['rfidno'];
?>

<script>
	
location.assign("http://localhost/projectweb/login/table/order_confirm/orderindex.php");

</script>


<?PHP


}

		?>
