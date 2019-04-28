<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<head>
  <title>List of Hotels</title>
  <link rel="stylesheet" type="text/css" href="listofhotel.css">
</head>
<body>
  <?php   $user=$_GET['var1'];
  echo "<form action=\"searchlist.php?var2=".$user."\" method=\"post\" class=\"form-inline\">" ;?>
    <div class="form-group div1">
      <div class="">
        <span class="input-group-text"> <i class="fa fa-search"></i> </span>
        <input type="text" class="form-control in1" id="hotelsearch" name="hotelsearch" placeholder="Search"/>
        <input class="btn btn-danger form-control" type="submit" value="Search" id="btn" name="search" />
    </div> <!-- form-group// -->
</div>


    </form>
  <div class="col-md-11 c2" id="tablee">
  				<div class="panel panel-primary">
  					<div class="panel-heading">
  						<center><h3>List of Hotels</h3><center>
  					</div>
  					<div class="panel-body">
  						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
  					</div>
  					<table class="table">

  							<tr>
  								<th>Hotel No</th>
  								<th>Hotel Name</th>
  								<th>Price for Single Room(Per day)</th>
                  <th>Price for Double Room(Per Day)</th>
  							</tr>
  						</thead>
  						<tbody>
  <?php
  {

    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"login");
    $result=mysqli_query($con,"select * from hotel");
    while($row=mysqli_fetch_assoc($result))
    {

  echo   "<tr>"
      ."<td>"."<a href=\"pass.php?varname=".$row['hotelno']."&var2=".$user."\">".$row['hotelno']."</a>"."</td>"
      ."<td>"."<a href=\"pass.php?varname=".$row['hotelno']."&var2=".$user."\">".$row['Name']."</td>"
      ."<td>".$row['prices']."</td>"
      ."<td>".$row['priced']."</td>"
      ."</tr></a>" ;
  }
  }

  ?>
  						</tbody>
  					</table>
  				</div>
  			</div>

  <?php   //$user=$_GET['var1']; ?>

      <?php

      echo "<form action=\"Bookings.php?var=".$user." \"method=\"post\">"; ?>
      <center>  <input class="btn btn-danger as"type="submit" value="Your Bookings" /></center>
      </form>

</body>
</html>
