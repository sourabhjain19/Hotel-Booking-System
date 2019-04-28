<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type='text/css' href="new0.css" >
<html>
<body>
<div class="col-md-11 c2" id="tablee">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h3>Details of all the Hotels</h3><center>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table">

							<tr>
								<th>Hotel No</th>
								<th>Hotel Name</th>
								<th>Hotel Address</th>
								<th>Per Day Charges for Single Room</th>
                <th>Per Day Charges for Double Room</th>
                <th>Maximum No of Single Room</th>
                <th>Maximum No of Double Room</th>
                <th>No of Single Room Booked</th>
                <th>No of Double Room Booked</th>
							</tr>
						</thead>
						<tbody>
              <?php
              $con=mysqli_connect("localhost","root","");
              mysqli_select_db($con,"login");

              $result=mysqli_query($con,"select * from hotel");
              while($row=mysqli_fetch_assoc($result))
              {

      echo   		"<tr>"
								."<td>".$row['hotelno']."</td>"
                ."<td>".$row['Name']."</td>"
                ."<td>".$row['Address']."</td>"
                ."<td>".$row['prices']."</td>"
                ."<td>".$row['priced']."</td>"
                ."<td>".$row['Maxsroom']."</td>"
                ."<td>".$row['Maxdroom']."</td>"
                ."<td>".$row['Bookeds']."</td>"
                ."<td>".$row['Bookedd']."</td>"
                ."</tr>" ;
            }
            ?>


						</tbody>
					</table>
				</div>
			</div>
			<form action="new1.php" method="post">
      <center>  <input class="btn btn-primary"type="submit" value="Click here to add new hotels" /></center>
		</form>
</body>
</html>
