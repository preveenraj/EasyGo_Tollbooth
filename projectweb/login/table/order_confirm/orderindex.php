<!DOCTYPE html>
<html lang="en">
<head>
	<style>

	input[type=number] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background:color=yellow;
	
}






	
		.labels {
  font-family: Montserrat-SemiBold;
  font-size: 20px;
  opacity: 0.6;
  color: #393939;
  line-height: 1.5;
  
  
}

.labelsalarm {
  font-family: Montserrat-SemiBold;
  font-size: 15px;
  opacity: 0.6;
  color: red;
  line-height: 1.5;
  
  
}

.button_verify {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px 20px;
  width: 20%;
  height: 30px;
  background-color: #17bebb;
  border-radius: 25px;
  margin: 10px;

  font-family: Montserrat-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.button_recharge {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px 20px;
  width: 20%;
  height: 30px;
  background-color: #17bebb;
  border-radius: 25px;
  margin: 10px;
  background: green;
  /* margin-left: auto; */

  font-family: Montserrat-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
		
		
		
		</style>
	<title>Vehicle Info</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<!-- <form class="contact100-form validate-form" action="rechargedb.php" method="post"> -->
				<span class="contact100-form-title">
					Vehicle Info
				</span>




			


				<?PHP

				$x = mysqli_connect("localhost","root","","tollbooth");
				$r = "select * from vehicletable where rfidno=(select rfidno from current)";
				// $r = "select * from vehicletable where rfidno='11004E00702F'";
				// $r = "select * from vehicletable where rfidno='270021C95E91'";
				// $r = "select rfidno from current";
				$qr = mysqli_query($x,$r);
				//$x = "select * from vehicletable where rfidno=(select rfidno from current)";
				// $a = "select rfidno from current";
				// $result = mysqli_query($x,$a);
				// 
			
				// while($row=mysqli_fetch_array($result)){
				// echo $row[0];
				// // $key=$row[0];
				// // $r = "select * from vehicletable where rfidno='".$key."'";
				// // $qr = mysqli_query($x,$r);
				// echo "<br>";
				// }


				while($s=mysqli_fetch_array($qr))
				{
						// $value=$s['name'];

						if($s['vtype']=='two wheeler')
						{$bill=100;
						}
						else if($s['vtype']=='four wheeler')
						{
							$bill= 200;
						}
						else if($s['vtype']=='heavy vehicle')
						{
		
							$bill= 250;
						}

						$balance=$s['balance'];
						$residue=$balance-$bill;
						$name=$s['name'];
						$vtype=$s['vtype'];
						$vno=$s['vno'];
						$rfidno=$s['rfidno'];
						
						

						if($residue>50)
						{
					

					?>
				
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
				<span class="label-input100">RFID No</span><br>
				<span class="labels"><?PHP echo $s['rfidno']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>


				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
				<span class="label-input100"> Owner Name</span><br>
				<span class="labels"><?PHP echo $s['name']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Vehicle Number</span><br>
						<span class="labels"><?PHP echo $s['vno']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Vehicle Type</span><br>
						<span class="labels"><?PHP echo $s['vtype']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Account Balance</span><br>
						<span class="labels"><?PHP echo $s['balance']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Bill Amount</span><br>
						<span class="labels"><?PHP echo $bill; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>

				<form class="contact100-form validate-form" action="success.php" method="post">


					<input type="hidden" name="name" <?PHP echo "value=$name"; ?>>
					<input type="hidden" name="vtype" <?PHP echo "value=$vtype"; ?>>
					<input type="hidden" name="vno" <?PHP echo "value=$vno"; ?>>
					<input type="hidden" name="billamount" <?PHP echo "value=$bill"; ?>>
					<input type="hidden" name="residue" <?PHP echo "value=$residue"; ?>>
					<input type="hidden" name="rfidno" <?PHP echo "value=$rfidno"; ?>>

					<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn">
						<span>
							Confirm Transaction
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

				</form>
			
					<?PHP 

						}else
						{

							
					?>
						
								<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
				<span class="label-input100">RFID No</span><br>
				<span class="labels"><?PHP echo $s['rfidno']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
							
							
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
				<span class="label-input100"> Owner Name</span><br>
				<span class="labels"><?PHP echo $s['name']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Vehicle Number</span><br>
						<span class="labels"><?PHP echo $s['vno']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>

					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Vehicle Type</span><br>
						<span class="labels"><?PHP echo $s['vtype']; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>


					<form class="contact100-form validate-form" action="rechargedb.php" method="post">

					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Account Balance</span><br>
						<span class="labels"><?PHP echo $s['balance']; ?></span>
					<span class="labelsalarm"><br>Insufficient Balance</span><br>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->

					<!-- <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
					<textarea class="input100" name="message" placeholder="Add money"></textarea>
					</div> -->₹ &nbsp;
					
					<input type="number" name="topup" placeholder="Add money">
					<button type="submit" class="button_recharge">
						<span> 
						
							Recharge?
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					
					</div>
					</form>
							





					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Bill Amount</span><br>
						<span class="labels"><?PHP echo $bill; ?></span>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					</div>
					





					<?PHP 

						}
						?>




					<?PHP 
						

					}
						?>

						





				
			
		</div>
	</div>





</body>
</html>
