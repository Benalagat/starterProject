<?php
include('server/server.php');
include('functions/main.php');
$errors=[];
$appointmentDetails=new main;
$appointment = $appointmentDetails->getAppointmentDetails();

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
<!--header section-->
<?php
include('header.php');
?>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left pageBelowNav">
<h4>Welcome <?php echo $_SESSION['email']; ?></h4>
<Button type="button" class="btn btn-secondary" onClick="logOut()">Log Out</Button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">AppointmentID</th>
      <th scope="col">Date</th>
      <th scope="col">Patient ID</th>
      <th scope="col">Doctor ID</th>
      <th scope="col">Time</th>
      <th scope="col">Department</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php
 foreach ($appointment as $appointment){?>
  <tbody>
    <tr>
      <td><?php echo $appointment['appointmentID'];?></td>
      <td><?php echo $appointment['appointmentDate'];?></td>
      <td><?php echo $appointment['patientID_fk'];?></td>
      <td><?php echo $appointment['doctorID_fk'];?></td>
      <td><?php echo $appointment['appointmentTime'];?></td>
      <td><?php echo $appointment['departmentID_fk'];?></td>
      <td><?php echo $appointment['appointmentReason'];?></td>
      <td><?php echo $appointment['statuz'];?></td>
    </tr>
    
    </tbody>
    <?php
  }
  ?>
</table>
 </div>
</div>

<!--footer section-->
<?php
include('footer.php');
?>

</body>
</html>