<?php
$cname=$_POST['cname'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$username=$_POST['user'];
$pass=$_POST['pass'];

$con=mysqli_connect("localhost","root","");

$cname=mysqli_real_escape_string($con,$cname);
$cno=mysqli_real_escape_string($con,$cno);
$username=mysqli_real_escape_string($con,$username);
$pass=mysqli_real_escape_string($con,$pass);

mysqli_select_db($con,"login");

$result=mysqli_query($con,"insert into userregis values('','$cname','$cno','$email')")
          or die("Unable to connect ".mysqli_error($con));
$result2=mysqli_query($con,"select * from userregis where CphoneNo='$cno'");
$row=mysqli_fetch_array($result2);
$cid=$row['CustomerId'];
if($row['CphoneNo']==$cno)
{
  $result1=mysqli_query($con,"insert into customerlogin values('$cid','$username','$pass')") or die("Unable to connect ".mysqli_error($con));
}

if($result2)
  echo "Successfuly Added new hotel";
else {
  echo "Failed to add new hotel";
  }
?>
