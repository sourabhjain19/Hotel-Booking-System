<?php

  $hotelname=$_POST['hotel'];
  $hoteladdress=(string)$_POST['address1'].", ".(string)$_POST['address2'].", ".(string)$_POST['address3'].", ".(string)$_POST['address4'];
  $prices=$_POST['prices'];
  $priced=$_POST['priced'];
  $hotelusername=$_POST['owneruser'];
  $hotelpass=$_POST['ownerpass'];
  $maxsrooms=$_POST['maxsrooms'];
  $maxdrooms=$_POST['maxdrooms'];
  $email=$_POST['email'];

  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"login");

  $result=mysqli_query($con,"insert into hotel values('$hotelname','$hoteladdress','$prices',$priced,'','$email','$maxsrooms','$maxdrooms',0,0)")
            or die("Unable to connect ".mysqli_error($con));
  $result2=mysqli_query($con,"select * from hotel where email='$email'");
  $row=mysqli_fetch_array($result2);
  $hotelno=$row['hotelno'];
  if($row['email']==$email)
    $result1=mysqli_query($con,"insert into hotellogin values('$hotelno','$hotelusername','$hotelpass')") or die(mysqli_error($con));
  if($result && $result1)
  {
    echo "Successfuly Added new hotel";
    $header = "From: sourabhjain1991999@gmail.com\r\n";
  $header.= "MIME-Version: 1.0\r\n";
  $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $header.= "X-Priority: 1\r\n";

  $status = mail("sourabhnjain19@gmail.com", "Subject","Om Shanti Jai Gurudev", $header);

  if($status)
  {
      echo '<p>Your mail has been sent!</p>';
  } else {
      echo '<p>Something went wrong, Please try again!</p>';
  }
  }
  else {
    echo "Failed to add new hotel";
    }
?>
