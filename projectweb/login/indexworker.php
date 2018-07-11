<html>
<body>
<?PHP

$username = $_POST['username'];
$password = $_POST['password'];


$x = mysqli_connect("localhost","root","","tollbooth");
$r = "select * from admin";
$qr = mysqli_query($x,$r);
            
while($s=mysqli_fetch_array($qr))
{

    if($s['username']==$username && $s['password']==$password)
        {
            // echo "login successful";
            header("Location: table/tableindex.php"); 
            
        }
       else{
        header("Location: index.html"); 
       }


    }

    ?>


    

 
</body>
</html>