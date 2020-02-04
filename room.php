<?php
session_start();
include('server/server.php')?>

<?php $roomID="";$roomType="";$roomNo="";$noOfBeds="";$roomTariff="";$status="";
?>
<?php 
if(isset($_POST[submit])){

  $roomID = mysqli_real_escape_string($db, $_POST['roomID']);
  $roomType = mysqli_real_escape_string($db, $_POST['roomType']);
  $roomNo = mysqli_real_escape_string($db, $_POST['roomNo']);
  $noOfBeds = mysqli_real_escape_string($db, $_POST['noOfBeds']);
  $roomTariff = mysqli_real_escape_string($db, $_POST['roomTariff']);
  $status= mysqli_real_escape_string($db, $_POST['status']);
  if(empty($roomID)||empty($roomType)||empty($roomNo)||empty($noOfBeds)||empty($roomTariff)||empty($status)){
    array_push($errors,"please fill all fields"); 
}else if(!empty($roomID)&&!empty($roomType)&&!empty($roomNo)&&!empty($noOfBeds)&&!empty($roomTariff)
    &&!empty($status)){
  $query = "INSERT INTO room (roomID,roomNo,roomType,noOfBeds,roomTariff,statuz)
 
        VALUES('$roomID','$roomNo', '$roomType', '$noOfBeds','$roomTariff','$status')";
  mysqli_query($db, $query);

  $_SESSION['email'] = $email;
  $_SESSION['success'] = "You are now logged in";
  header('location: room.php');

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
		<h2>Add New Room</h2>
	</div>
	
	<form method="post" action="room.php">

		<?php include('errors.php'); ?>
        <div class="input-group">
			<label>Room ID</label>
			<input type="text" name="roomID" value="<?php echo $roomID; ?>">
		</div>
        <div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomNo" value="<?php echo $roomNo; ?>">
		</div>

    <div class="input-group">
			<label> Room Type</label>
			<input type="text" name="roomType" value="<?php echo $roomType; ?>">
		</div>
		
        <div class="input-group">
			<label>Number of beds</label>
			<input type="text" name="noOfBeds" value="<?php echo $noOfBeds; ?>">
		</div>
        <div class="input-group">
			<label>Room Tariff</label>
			<input type="text" name="roomTariff" value="<?php echo $roomTariff; ?>">
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