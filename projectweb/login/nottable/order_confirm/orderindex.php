<!DOCTYPE html>
<html lang="en">
<head>
	<style>
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
  background: red;
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
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Vehicle Info
				</span>



				<!-- <div class="wrap-input100 validate-input bg1" data-validate="Please Type vehicle RFID">
					<span class="label-input100">RFID No</span>
					<input class="input100" type="text" name="rfidno" placeholder="Enter vehicle RFID">
				</div> -->

					
					<!-- <button class="button_verify">
							
								Verify Tag
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							
						</button> -->
						
					
				



				<!-- <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" >
					<span class="label-input100">Owner Name</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Needed Services *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Please chooses</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What type of products do you sell?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Phycical Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Digital Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Services Consulting
							</label>
						</div>
					</div>

					<div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span>

						<div class="contact100-form-range-value">
							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>  -->

				
			<!-- 	<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
						<span class="labels">Owner Name</span>
						<textarea class="input100" name="message" placeholder="Your message here..."></textarea> 
					</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
						<span class="labels">Vehicle Number</span>
						<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					</div>	
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
						<span class="labels">Vehicle Type</span>
						<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
							<span class="labels">Balance</span>
							<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					</div>	 -->




				<?PHP

				$x = mysqli_connect("localhost","root","","tollbooth");
				$r = "select * from vehicletable where rfidno='270021C95E91'";
				// $r = "select * from vehicletable where rfidno='11004E00702F'";
				$qr = mysqli_query($x,$r);

			



				while($s=mysqli_fetch_array($qr))
				{
						// $value=$s['name'];

						if($s['vtype']=='two')
						{$bill=100;
						}
						else if($s['vtype']=='four')
						{
							$bill= 200;
						}
						else{
		
							$bill= 250;
						}

						$residue=$s['balance']-$bill;

						if($residue<50)
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

					<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Confirm Transaction
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			
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
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100"> Account Balance</span><br>
						<span class="labels"><?PHP echo $s['balance']; ?></span>
					<span class="labelsalarm"><br>Insufficient Balance</span><br>
						<!-- <textarea class="input100" name="message" placeholder="Your message here..."></textarea> -->
					<button class="button_recharge">
						<span>
							Recharge?
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					</div>
					
					<div class="container-contact100-form-btn">
					</div>

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

						





				
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
