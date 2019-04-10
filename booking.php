<?php 
  include_once 'header.php';
  session_start();
?>


	<div class="col-md-4">

       <div class="card">
       		<div class="card-header">
       			<h2 align="center">Make Your Booking Here</h2>
       		</div>
       		<div class="card-body"> 
       		<form class="signup-form" action="confirmbooking.php" method="POST">
       			 <div class="form-group">
       				<label>Name</label>
       				<input type="text" class="form-control form-control-lg rounded-0" name = "first" required="true">
       			</div>
       				<div class="form-group">
       					<label>Email</label>
       					<input type="text" class="form-control form-control-lg rounded-0" name = "email" required="true">
       			</div>
       			<div class="form-group">
       				<label>Injury Type</label>
       				<select class="form-control form-control-lg rounded-0" name="injury">
       					<option value ="select">Select</option>
       					<option value ="recovery">Recovery</option>
       					<option value="anxiety">Anxiety</option>
       					<option value ="bodypain">Bodypain</option>
       					<option value ="stress">Stress</option>
       					<option value ="depression">Depression</option>
					</select>
				</div>
				<div class="form-group">
       				<label>Massage</label>
       				<select class="form-control form-control-lg rounded-0" name="massage">
       					<option value ="select">Select</option>
       					<option value ="head">Head Massage</option>
       					<option value="body">Body Massage</option>
       					<option value ="hotstone">Hot Stone Massage</option>
       					<option value ="sports">Sports Massage</option>
       					<option value ="trigger">Trigger Point Massage</option>
					</select>
				</div>
				<div class="form-group">
					<label>Time Slot</label><br>
					<input type="radio"  name = "timeslot" value="morning" name="timeslot">10am-12pm<br>	
					<input type="radio" name = "timeslot" value="afternoon" name="timeslot">	1pm-3pm<br />
					<input type="radio"  name = "timeslot" value="evening" name="timeslot">3pm-5pm<br />
				</div>
				<div class="form-group">
		        	<button type="submit" class="btn btn-success btn-lg float-right" name="submit">Book Now</button>
				</div>
       </div>
    </div>

<?php 
  include_once 'footer.php';
?>
  