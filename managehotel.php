<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="managehotel.css">
<body>

<form id='form1' action="" method='post' class="form11">

<center>  <h4><p class="s">Select any one of the following operation</p></h4></center>


<div class="i"><input class="radio radio-warning" type='radio' name='option' value='updatename'/> <label class="i">Update Name</label></div>
<div class="i"><input type='radio' name='option' value='updateaddress'/> <label class="i"> Update Address</label></div>
<div class="i"><input type='radio' name='option' value='updateprices'/> <label class="i"> Update Price For Single Rooms</label></div>
<div class="i"><input type='radio' name='option' value='updatepriced'> <label class="i">Update Price For Double Rooms</label></div>
<div class="i"><input type='radio' name='option' value='updatemaxsingle'/> <label class="i"> Update Maximum No of Single Rooms</label></div>
<div class="i"><input type='radio' name='option' value='updatemaxdouble'/><label class="i"> Update Maximum No of Double Rooms</label></div>
<div class="ii"><center>Enter the Required Update Value  :</center>
<center><label class="bp"><input type='text' name='v' id='v' /></label></center></div>
<div class="b">
<center>  <input class="btn btn-primary" type="submit" id="btn" name="btn" value="Update Value" /></center>
</div>
</form>

<?php
$var=$_GET['var'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
if(isset($_REQUEST['btn']))
{
$v=$_POST['v'];
if($_POST['option']=='updatename')
{
//  echo "<div id='upname'>";
  $result=mysqli_query($con,"update hotel set Name='$v' where hotelno='$var'");
  if($result)
  {}else {
    echo mysqli_error($con);
  }
  //echo "</div>";
}else if($_POST['option']=='updateaddress')
{
    $result=mysqli_query($con,"update hotel set Address='$v' where hotelno='$var'");
}
else if($_POST['option']=='updateprices')
{
    $result=mysqli_query($con,"update hotel set prices='$v' where hotelno='$var'");
      echo "Prices of Single rooms are Updated";
}
else if($_POST['option']=='updatepriced')
{
    $result=mysqli_query($con,"update hotel set priced='$v' where hotelno='$var'");
      echo "Prices for double rooms are Updated";
}
else if($_POST['option']=='updatemaxsingle')
{
    $result=mysqli_query($con,"update hotel set Maxsroom='$v' where hotelno='$var'");
  echo "Maximum Single rooms Updated";
}
else if($_POST['option']=='updatemaxdouble')
{
    $result=mysqli_query($con,"update hotel set Maxdroom='$v' where hotelno='$var'");
  echo "Maximum double rooms Updated";
}
}
//else if($_POST['option']=='view')
echo "<form action=\"managehotel2.php?var=".$var." \"method=\"post\">"; ?>
<center>  <input class="btn btn-danger as"type="submit" value="Click here to View list of Booked Customers" /></center>
</form>

</body>
</html>
