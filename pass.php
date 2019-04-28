<html>
<body>
<?php
$varid_id = $_GET['varname'];
$username=$_GET['var2'];
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="pass.css">

<div class="container c1">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			 <h3 class=""><label class="label label-danger l1 label-block"> Enter the following Details</label></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <label>Check In</label>
			                <input type="date" name="dateofbooking" id="first_name" class="form-control input">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                      <label>Check-out</label>
			    						<input type="date" name="checkout" id="last_name" class="form-control input">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group form-inline">
                  <label>No of Rooms : </label>
			    				<input type="text" name="noofrooms" id="email" class="form-control input-sm" placeholder="No of Rooms">
			    			</div>

			    					<div class="form-group form-inline">
                      <label>Type of Room   : </label>
			    						<select name="type" class="btn btn-danger">
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                      </select>
			    					</div>

			    			</div>

			    			<input type="submit" value="Submit" class="btn btn-danger btn-block" name="Sub">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>

  <?php
      if(isset($_REQUEST['Sub']))
      {
        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"login");
        $date=$_POST['dateofbooking'];
        $date=stripcslashes($date);
        $date=mysqli_real_escape_string($con,$date);

        $noofrooms=$_POST['noofrooms'];
        $noofdays=$_POST['checkout'];
        $noofdays=stripcslashes($noofdays);
        $noofdays=mysqli_real_escape_string($con,$noofdays);
        $sd=$_POST['type'];
        $user=mysqli_query($con,"select * from userregis,customerlogin where Cid=CustomerId and username='$username'") or die(mysqli_error($con));

        $userrow=mysqli_fetch_array($user);
        $id=$userrow['CustomerId'];

        $result=mysqli_query($con,"insert into customer values('$id','$varid_id','$date','$noofrooms','$noofdays','$sd')") or die(mysqli_error($con));
        $result1=mysqli_query($con,"select * from hotel where hotelno='$varid_id'");
        $row=mysqli_fetch_array($result1);
        if($sd=='single')
          $varid=$row['Bookeds']+$noofrooms;
        else
          $varid=$row['Bookedd']+$noofrooms;
        if($sd=='single')
          $result2=mysqli_query($con,"update hotel set Bookeds=$varid where hotelno='$varid_id'");
        else
          $result2=mysqli_query($con,"update hotel set Bookedd=$varid where hotelno='$varid_id'");
        if($result)
          {
            echo "Succesfully Added";
          }
          else
          {
              echo "Error".mysqli_error($con);
          }
      }
  ?>
</body>
</html>
