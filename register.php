<?php include('server/server.php');
$errors=[];

if (isset($_POST['reg_user'])) {
	$patientID =  $_POST['patientID'];
	$patientName =  $_POST['patientName'];
	$dob =  $_POST['dob'];
	$weight =  $_POST['weight'];
	$bloodGroup =  $_POST['bloodGroup'];		
	$gender =  $_POST['gender'];	
	$address =  $_POST['address'];
	$contact =  $_POST['contact'];		
	$date =  $_POST['dt'];	
	$time =  $_POST['tim'];		
	$status =  $_POST['status'];		
	$email =  $_POST['email'];		
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	if (empty($patientID)|| empty($patientName)|| empty($dob)|| empty($weight) 
	|| empty($bloodGroup)|| empty($gender)|| empty($address)|| empty($contact)
	|| empty($date)|| empty($time)|| empty($status)|| empty($email) 
		|| empty($password_1)|| empty($password_2) ) { array_push($errors, "Please fill all required fields!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (empty($errors)) {
			$password = md5($password_1);
			$query = $pdo->prepare("INSERT INTO `afyacentre`.`patient` (`patientID`,`patientName`,`DOB`,`patientWeight`,
			`bloodGroup`,`gender`,`patientAddress`,`contact`,`pStatus`,`admDate`,`admTime`,`email`,`passwords`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
						$query->bindValue(1,$patientID);
						$query->bindValue(2,$patientName);
						$query->bindValue(3,$dob);
						$query->bindValue(4,$weight);
						$query->bindValue(5,$bloodGroup);
						$query->bindValue(6,$gender);
						$query->bindValue(7,$address);
						$query->bindValue(8,$contact);
						$query->bindValue(9,$date);
						$query->bindValue(10,$time);
						$query->bindValue(11,$status);
            $query->bindValue(12,$email);
            $query->bindValue(13,$password);
						$query->execute();
			header('Location: register.php');
            exit();

		}else echo('Error');
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
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>patientID</label>
			<input type="text" name="patientID" value="">
		</div>
    <div class="input-group">
			<label>patientName</label>
			<input type="text" name="patientName" value="">
		</div>
		<div class="input-group">
			<label>DOB</label>
			<input type="text" name="dob" value="">
		</div>
    <div class="input-group">
			<label>Weight</label>
			<input type="text" name="weight" value="">
		</div>
    <div class="input-group">
			<label>Blood group</label>
			<input type="text" name="bloodGroup" value="">
		</div>
    <div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender" value="">
		</div>
    <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
    <div class="input-group">
			<label>Contact</label>
			<input type="text" name="contact" value="">
		</div>
    <div class="input-group">
			<label>Date</label>
			<input type="date" name="dt" >
		</div>
    <div class="input-group">
			<label>Time</label>
     <input type="time" name="tim">
		</div>
    <div class="input-group">
			<label>Status</label>
			<input type="text" name="status" >
		</div>
    <div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

	<!--foote section-->
	<?php
  include('footer.php');
  ?>

</body>
</html>