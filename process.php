<?php
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $option=$_POST['option'];
  $username=stripcslashes($username);
  $password=stripcslashes($password);

  $con=mysqli_connect("localhost","root","");

  $username=mysqli_real_escape_string($con,$username);
  $password=mysqli_real_escape_string($con,$password);


  mysqli_select_db($con,"login");
  if($option=='SiteManager')
  {
    $result=mysqli_query($con,"select * from users where username= '$username' and password = '$password'")
              or die("Unable to connect ".mysqli_error($con));
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password)
    {
      header("location:new0.php");
      echo "Login Successful!!!! Welcome ".$row['username'];
    }
    else
    {
      echo "Failed to Login";
    }
  }
  else if($option=='HotelManager')
  {
    $result=mysqli_query($con,"select * from hotellogin where username= '$username' and password = '$password'")
                or die("Unable to connect ".mysqli_error($con));
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password)
    {
      $temp=$row['hotelno'];
      header("location:managehotel.php?var=".$temp);
      echo "Login Successful!!!! Welcome ".$row['username'];
    }
    else
    {
      echo "Failed to Login";
    }
  }
  else {
    $result=mysqli_query($con,"select * from customerlogin where username= '$username' and password = '$password'")
                or die("Unable to connect ".mysqli_error($con));
    $row=mysqli_fetch_array($result);
    if($row['username']==$username && $row['password']==$password)
    {
      header("location:listofhotel.php?var1=".$row['username']);
      echo "Login Successful!!!! Welcome ".$row['username'];
    }
    else
    {
      echo "Failed to Login";
    }
  }

?>
