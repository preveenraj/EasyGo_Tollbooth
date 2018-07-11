
<HTML>
<?PHP


// echo "confirmed";

// echo $_POST["billamount"];

$decrement= $_POST["billamount"];
$billamount=$decrement;
$name= $_POST["name"];
$vtype= $_POST["vtype"];
$vno= $_POST["vno"];
$residue= $_POST["residue"];
$rfidno=$_POST["rfidno"];


    
    // echo $name;
    
    $x = mysqli_connect("localhost","root","","tollbooth");
    
    
    $r = "update vehicletable set balance=balance-$decrement where rfidno=(select rfidno from current)";
    $qr = mysqli_query($x,$r);

    $resi = "update balance set amount=$residue";
    $res = mysqli_query($x,$resi);

    mysqli_commit($x);


    $flagsetter = "update flag set fval=1";
    $fs = mysqli_query($x,$flagsetter);

    
    
    // $clear="delete from current";
    // $cr = mysqli_query($x,$clear);
    
    
    // $historyupdate= "insert into orders(vno) values(\"chakka\")";
    // $historyupdate= "update orders set name='$name'";
    $historyupdate="insert into history(name,vno,vtype,rfidno,bill) values('$name','$vno','$vtype','$rfidno','$billamount')" ;
    // $historyupdate="update history set bill=4545 where transid=201";
    $hu = mysqli_query($x,$historyupdate);

    
    
    mysqli_commit($x);
    
    




?>
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="receipt.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
	<div class="row">
		
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
							<img class="img-responsive" alt="iamgurdeeposahan" src="http://localhost/projectweb/login/images/Background.png" style=" width: 300px; border-radius: 43px;">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5>EasyGo TollBooth</h5>
							<p>+91 9543954312<i class="fa fa-phone"></i></p>
							<p>admin@easygo.com<i class="fa fa-envelope-o"></i></p>
							<p>Cochin<i class="fa fa-location-arrow"></i></p>
						</div>
					</div>
				</div>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right"><font face=verdana> 
                            <h5><?PHP echo $name;?></h5>
							<p><b><font size=3>Vehicle No. :</font></b><font size=3> <?PHP echo $vno;?></font></p>
							<p><b><font size=3>Vehicle Type :</font></b><font size=3> <?PHP echo $vtype;?> wheeler</font></p>
							<!-- <p><b>Vehicle Type:</b> four wheeler</p> -->
							<!-- <p><b>Address :</b> Australia</p> -->
                        </font>
						</div>
					</div>
					<!-- <div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h1>Receipt</h1>
						</div>
					</div> -->
				</div>
            </div>
			
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td class="col-md-9">Bill Amount</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                        </tr> -->
                        <!-- <tr>
                            <td class="col-md-9">Payment for June 2016</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 6,00/-</td>
                        </tr>
                        <tr>
                            <td class="col-md-9">Payment for May 2016</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 35,00/-</td>
                        </tr> -->
                        <tr>
                            <td class="text-right">
                            <p><font face=verdana> 
                                <strong>Bill Amount </strong>
                            </font>
                            </p>
                             <p>
                             <font face=verdana> 
                                 <strong>Outstanding Balance </strong>
                                </font>
                            </p>
                            <!--
							<p>
                                <strong>Payable Amount: </strong>
                            </p>
							<p>
                                <strong>Balance Due: </strong>
                            </p> -->
							</td> 
                            <td>
                            <p>
                              <font face=verdana> 
                                  <strong><i class="fa fa-inr"></i><?PHP echo $billamount;?></strong>
                                </font>
                            </p>
                             <p><font face=verdana> 
                                 <strong><i class="fa fa-inr"></i> <?PHP echo $residue;?></strong>
                                </font>
                            </p>
                            <!--
							<p>
                                <strong><i class="fa fa-inr"></i> 1300/-</strong>
                            </p>
							<p>
                                <strong><i class="fa fa-inr"></i> 9500/-</strong>
                            </p> -->
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right"><h2>
                            <font face=verdana> 
                                <strong>Total </strong></h2>
                            </font>
                            </td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> <?PHP echo $billamount;?></strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form action="opener.php" method="post">
            <button type="submit" class="btn" style="float: right;">
            <span> 
            <font face="verdana" color="white">Open Gate

            </font>
                
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
            </button>
            </form>


            
			<br>
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<!-- <p><b>Date :</b> 15 Aug 2016</p> -->
							<h5 style="color: rgb(140, 140, 140);">Inc. of all taxes</h5>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
                            <!-- <h1>Signature</h1> -->
						</div>
					</div>
				</div>
            </div>
			
        </div>    
	</div>
</div>

</body>
</html>







