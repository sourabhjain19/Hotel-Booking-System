<!DOCTYPE html>
<html>
<head>
  <title>Adding Hotels</title>
  <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
  List of all the hotels :<br>
  <?php
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"login");

  $result=mysqli_query($con,"select * from hotel");
  while($row=mysqli_fetch_assoc($result))
  {
    echo $row['hotelno']."    ".$row['Name']."    ".$row['Address']."   ".$row['Price']."   ".$row['Maxsroom']."    ".$row['Maxdroom']."   ".$row['Bookeds']."   ".$row['Bookedd']."<br>";
  }
  ?>
  <div id="form">
    <br>Adding New Hotel
      <form action="hotel.php" method="post">
        <p>
          <label>Hotel Number</label>
          <input type="text" id="no" name="no" />
        </p>
        <p>
          <label>Hotel Name</label>
          <input type="text" id="hotel" name="hotel" />
        </p>
        <p>
          <label>Address</label>
          <input type="text" id="address" name="address" />
        </p>
        <p>
          <label>Price</label>
          <input type="text" id="price" name="price" />
        </p>
        <p>
          <label>Max Single Rooms</label>
          <input type='text' id='maxsrooms' name='maxsrooms'>
        </p>
        <p>
          <label>Max Double Rooms</label>
          <input type='text' id='maxdrooms' name='maxdrooms'>
        </p>
        <p>
          <label>Owner Username</label>
          <input type="text" id="owneruser" name="owneruser" />
        </p>
        <p>
          <label>Owner Password</label>
          <input type="password" id="ownerpass" name="ownerpass" />
        </p>
        <p>
          <input type="submit" value="Submit" id="btn1" name="Submit" />
        </p>
      </form>
  </div>
</body>
</html>
