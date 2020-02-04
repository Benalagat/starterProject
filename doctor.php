<?php
session_start();
include('server/server.php')?>

<?php $doctorID=""; $doctorName="";$departmentID="";$education="";$status="";$consultancyFee="";$email="";
$password_1="";$password_2="";$status="";
?>
<?php 
if(isset($_POST[submit])){

  $doctorID = mysqli_real_escape_string($db, $_POST['doctorID']);
  $doctorName = mysqli_real_escape_string($db, $_POST['doctorName']);
  $departmentID = mysqli_real_escape_string($db, $_POST['departmentID']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $education = mysqli_real_escape_string($db, $_POST['education']);
  $consultancyFee = mysqli_real_escape_string($db, $_POST['consultancyFee']);
  $status= mysqli_real_escape_string($db, $_POST['status']);
  if(empty($doctorID)||empty($doctorName)||empty($departmentID)||empty($email)||empty($education)
  ||empty($consultancyFee)||empty($status)){
    array_push($errors,"please fill all fields"); }
    if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

if (count($errors) == 0) {
  $password = md5($password_1);//encrypt the password before saving in the database
  $query = "INSERT INTO doctor (doctorID,doctorName,departmentID, contact,
  email,passwords,education,consultancyFee,statuz)
 
        VALUES('$doctorID', '$doctorName', '$departmentID','$contact','$email','$password','$education','$consultancyFee',
        '$status')";
  mysqli_query($db, $query);

  $_SESSION['email'] = $email;
  $_SESSION['success'] = "You are now logged in";
  header('location: appointment.php');
}

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
</head>
<body>
<!--nav bar -->
<?php
include('header.php');
?>
<!--end of nav bar-->
	<div class="header">
		<h2>Add New Doctor</h2>
	</div>
	
	<form method="post" action="doctor.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Doctor ID</label>
			<input type="text" name="doctorID" value="<?php echo $doctorID ?>">
		</div>
    <div class="input-group">
			<label> Doctor Name</label>
			<input type="text" name="doctorName" value="<?php echo $doctorName; ?>">
		</div>
		<div class="input-group">
			<label>Department ID</label>
			<input type="text" name="departmentID" value="<?php echo $departmentID; ?>">
		</div>
    <div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact" value="<?php echo $contact; ?>">
		</div>
    <div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
    <div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
    <div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" >
		</div>
    <div class="input-group">
			<label>Education</label>
			<input type="text" name="education" value="<?php echo $education; ?>">
		</div>
    <div class="input-group">
			<label>Consultancy Fee</label>
			<input type="text" name="consultancyFee" value="<?php echo $consultancyFee; ?>">
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
	<<?php
  include('footer.php');
  ?>

</body>
</html>