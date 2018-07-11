<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}

upon {
    border: 5px dotted #bbb; /* Dotted border */
    width: 80%; 
    border-radius: 15px; /* Rounded border */
    margin: 0 auto; /* Center the coupon */
    max-width: 600px; 
}

.container {
    padding: 2px 16px;
    background-color: #FDBE4F;
}

.promo {
    background: #0067B3;
    padding: 3px;
}

.expire {
    color: red;
}


.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	width: 300px;
	position: absolute;
	left:40%;
	top: 100%;
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
</head>
<body onload="myFunction()" style="margin:0;">
<div id="first">
<div id="loader" class="card" style="position: absolute; left:49%; top: 47%;">
</div>
<center>

<div>
  
  <div class="container">
    
 


<font size="6" color="#0067B3" >
<b>
opening gate!
</b>
</font>
</center>

 </div>
</div>


</div>



<div style="display:none;" id="myDiv" class="animate-bottom">
  <!-- <h2>Vehicle ready to Go</h2> -->
  <div class="coupon">
  <div class="container">


  <div class="card">
  <img src="http://localhost/projectweb/login/table/order_confirm/tollbooth.gif" alt="animated" style="width:100%">
  <div class="container">
    <!-- <h4><b>Opening Gate...</b></h4>  -->
    <p> <font size=4;>&nbsp;Vehicle ready to Go</font></p> 
  </div>
</div>





    <!-- <h3>Company Logo</h3> -->
  </div>
  <img src="http://localhost/projectweb/login/images/Background.png" alt="Avatar" style="width:20%;">
  <div class="container" style="background-color:white">
    <h2><b>Redirecting to home page in few seconds</b></h2> 
    <!-- <p>Lorem ipsum..</p> -->
  </div>
  <div class="container">
    <!-- <p>Use Promo Code: <span class="promo">BOH232</span></p> -->
    <!-- <p class="expire">Expires: Jan 03, 2017</p> -->
    </div>
  </div>
</div>




  <!-- <p>Some text in my newly loaded page..</p> -->
</div>


 
</div>
<script>
var myVar;
var redirector;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
    redirector = setTimeout(function() {
  //your code to be executed after 1 second
  location.assign("http://localhost/projectweb/login/table/tableindex.php");
}, 10000);
}

function showPage() {
  document.getElementById("first").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
//   document.getElementById("awesome").style.display = "block";


}
</script>


<?PHP 

$x = mysqli_connect("localhost","root","","tollbooth");

$resi = "update balance set amount=0";
$res = mysqli_query($x,$resi);

$clear="delete from current";
$cr = mysqli_query($x,$clear);

mysqli_commit($x);



?>


</body>
</html>
