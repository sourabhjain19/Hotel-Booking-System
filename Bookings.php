<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="Bookings.css">
<body>

<div class="col-md-11 c2" id="tablee">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h3>Your Bookings</h3><center>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table">

							<tr>
								<th>Hotel No</th>
								<th>Hotel Name</th>
								<th>Address</th>
                <th>Date of Booking</th>
                <th>Checkout Date</th>
                <th>No of Rooms</th>
                <th>Type of Room</th>
							</tr>
						</thead>
						<tbody>
<?php
{
  $user=$_GET['var'];

  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"login");
  $result=mysqli_query($con,"select * from hotel,customer,userregis,customerlogin where customer.hotelno=hotel.hotelno and CustomerId=Customerno and Cid=CustomerId and username='$user'") or die(mysqli_error($con));
	while($row=mysqli_fetch_assoc($result))
  {
echo   		"<tr>"
    ."<td>".$row['hotelno']."</td>"
    ."<td>".$row['Name']."</td>"
    ."<td>".$row['Address']."</td>"
    ."<td>".$row['dateofbooking']."</td>"
    ."<td>".$row['checkout']."</td>"
    ."<td>".$row['noofrooms']."</td>"
    ."<td>".$row['singleordouble']."</td>"
    ."</tr>" ;
}
}

?>
						</tbody>
					</table>
				</div>
			</div>

</body>
</html>
