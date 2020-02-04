
<?php include('server/server.php');
include('functions/main.php');
$errors=[];
$patientID=new main();
$patient=$patientID->getPatientID();

$departmentID=new main();
$department=$departmentID->getDepartmentID();

$doctorID=new main();
$doctor=$doctorID->getDoctorID();

	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>afyaCentre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">    
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css" />-->
    <!--<link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.min.css" />-->
    <!--<script src="js/bootstrap/bootstrap.min.js"></script>-->
    <!--<script src="js/bootstrap/popper.min.js"></script>-->
    <!--<script src="js/jquery/jquery-2.2.4.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php
include('header.php');
?>
<!-- <div class="header">
		<h2> Session ON</h2>
	</div> -->
<!--remove error notification here and place on notepad-->
<div class="session">

<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
  <!-- <div class="error success" >
    <h3>
      <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
      ?>
    </h3>
  </div> -->
<?php endif ?>



		<!-- logged in user information -->
		<?php  if (isset($_SESSION['email'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
  <div class="header">
		<h2>Add new appointment</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>


		<div class="input-group">
			<label>Appointment ID</label>
			<input type="text" name="appointmentID" value=""">
		</div>
    <div class="input-group">
			<label>Apointment Date</label>
			<input type="text" name="appointmentDate" value="">
		</div>
		<div class="input-group">
			<label>Patient ID</label>
			<select class="input-group"><?php
 foreach ($patient as $patient){?>
		<option>
      <td><?php echo $patient['patientID'];?></td>
			</option>
    <?php
  }
  ?>
		</select>
		</div>
    <div class="input-group">
			<label>Doctor ID</label>
			<select class="input-group"><?php
 foreach ($doctor as $doctor){?>
		<option>
      <td><?php echo $doctor['doctorID'];?></td>
			</option>
    <?php
  }
  ?>
		</select>
		</div>
    <div class="input-group">
			<label>AppointmentTime</label>
			<input type="text" name="appontmentTime" value="">
		</div>
    <div class="input-group">
			<label>Department ID</label>
			<select class="input-group"><?php
 foreach ($department as $department){?>
		<option>
      <td><?php echo $department['departmentID'];?></td>
			</option>
    <?php
  }
  ?>
		</select>
		</div>
    <div class="input-group">
			<label>Appointment Reason</label>
			<input type="text" name="appointmentReason" value="">
		</div><br>
    <div >
			<label>Status</label>
			<select name="status"id="select-type">
            <option  selected>Active</option><br>
            <option >Inactive</option>
            </select>
		</div><br>
    <div class="input-group">
			<button type="submit" class="btn" name="submit">Submit</button>
		</div>
    
	
	</form>

	<!--foote section-->
	<?php
  include('footer.php');
  ?>

		
</body>
</html>