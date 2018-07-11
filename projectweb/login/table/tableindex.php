<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="refresh" content="3">
  

<style>

.transid {
  background-color: #fff;
  position: absolute;
  z-index: 1000;
  width: 210px;
  top: 0;
  left: 0;
}


.button {
    background-color: #16a085;
    border: none;
	color: white;
	position: absolute;
	left:40%;
	top: 15%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
	
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	border-radius: 25px;
	
  


	 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  color: #2c3e50;
  
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}



.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	width: 300px;
	position: absolute;
	left:40%;
	top: 40%;
	padding: 20px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}





</style>
	<title>History</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>



	<div class="limiter">
			<!-- <a href="http://localhost/projectweb/login/order_confirm/orderindex.php" class="button" ><span>Show Details</span></a> -->

<div class="card">
  <img src="http://localhost/projectweb/login/table/cargo.gif" alt="animated" style="width:100%">
  <div class="container">
    <!-- <h4><b>Waiting for Vehicle</b></h4>  -->
    <p> <font size=3;>&nbsp;Waiting for new entries...</font></p> 
  </div>
</div>
		<div class="container-table100">
			<div class="wrap-table100">
					<h1><font color="white" size="300" face="verdana"> History</font></h1>
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Transaction ID</th>
								</tr>
							</thead>
							<tbody>
								
								
								<?PHP



									$x = mysqli_connect("localhost","root","","tollbooth");
									$r = "select * from history order by timestamp desc";
									$qr = mysqli_query($x,$r);


									$flagsetter = "update flag set fval=0";
									$fs = mysqli_query($x,$flagsetter);

									mysqli_commit($x);



								
								// $i=7;
								
								while($s=mysqli_fetch_array($qr))
							

								// while($i>0)
								{  ?>

									<tr class="row100 body">
										<td class="cell100 column1"><?PHP echo $s['transid']; ?></td>
									</tr>
									
									<?PHP
										// $i=$i-1;			
										
									}
									
									?>
								
								
								<!--
								<tr class="row100 body">
									<td class="cell100 column1">Brandon Green</td>
								</tr>
								 <tr class="row100 body">
									<td class="cell100 column1">Kathy Daniels</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Elizabeth Alvarado</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Michael Coleman</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Jason Cox</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Christian Perkins</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Emily Wheeler</td>
								</tr> -->
							</tbody>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Owner Name</th>
										<th class="cell100 column3">TimeStamp</th>
										<th class="cell100 column4">Vehicle No</th>
										<th class="cell100 column5">Vehicle Type</th>
										<th class="cell100 column6">RFID No</th>
										<th class="cell100 column7">bill amount</th>
										<!-- <th class="cell100 column8">Card No</th> -->
									</tr>
								</thead>
								<tbody>


									<?PHP

									// $i=7;

									// while($i>0)


									$x = mysqli_connect("localhost","root","","tollbooth");
									$r = "select * from history order by timestamp desc";
									$qr = mysqli_query($x,$r);

									while($s=mysqli_fetch_array($qr))
									{
											?>
						

								

										<tr class="row100 body">
										<td class="cell100 column2"><?PHP echo $s['name']; ?></td>
										<td class="cell100 column3"><?PHP echo $s['timestamp']; ?></td>
										<td class="cell100 column4"><?PHP echo $s['vno']; ?></td>
										<td class="cell100 column5"><?PHP echo $s['vtype']; ?></td>
										<td class="cell100 column6"><?PHP echo $s['rfidno']; ?></td>
										<td class="cell100 column7"><?PHP echo $s['bill']; ?></td>
										</tr>

									<?PHP
										// $i=$i-1;
									}

									?>

									<!-- <tr class="row100 body">
										<td class="cell100 column2">Marketing</td>
										<td class="cell100 column3">16 Nov 2015</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">kathy_82@example.com</td>
										<td class="cell100 column6">26</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx1616</td>
									</tr>

									<tr class="row100 body">
										<td class="cell100 column2">CFO</td>
										<td class="cell100 column3">16 Nov 2013</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">elizabeth82@example.com</td>
										<td class="cell100 column6">32</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx5326</td>
									</tr>

									<tr class="row100 body">
										<td class="cell100 column2">Designer</td>
										<td class="cell100 column3">16 Nov 2013</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">michael94@example.com</td>
										<td class="cell100 column6">22</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx6328</td>
									</tr>

									<tr class="row100 body">
										<td class="cell100 column2">Developer</td>
										<td class="cell100 column3">16 Nov 2017</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">jasoncox@example.com</td>
										<td class="cell100 column6">25</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx7648</td>
									</tr>

									<tr class="row100 body">
										<td class="cell100 column2">Sale</td>
										<td class="cell100 column3">16 Nov 2016</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">christian_83@example.com</td>
										<td class="cell100 column6">28</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx4152</td>
									</tr>

									<tr class="row100 body">
										<td class="cell100 column2">Support</td>
										<td class="cell100 column3">16 Nov 2013</td>
										<td class="cell100 column4">30 Nov 2017</td>
										<td class="cell100 column5">emily90@example.com</td>
										<td class="cell100 column6">24</td>
										<td class="cell100 column7">New York City, NY</td>
										<td class="cell100 column8">424242xxxxxx6668</td>
									</tr> -->
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

// <script>
	
// 	location.assign("http://localhost/projectweb/login/table/checker.php");
	
// 	</script>

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













</body>
</html>