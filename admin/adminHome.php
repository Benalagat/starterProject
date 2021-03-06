<?php

include('server/server.php');
include('functions/appointmentPost.php');
$appointmentPost  = new Main;
$check = new Main;
$appointment = $appointmentPost->getAllAppointments();
$check_login = $check->logged_in();

if($check_login === false){
  header('Location: admin.php');
}else{

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
<!--end of nav bar-->
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left pageBelowNav">
          <h6>Welcome <?php echo $_SESSION['username']?></h6>

          <a href="../addNewProduct.php"> <button type="button" class="btn btn-success">Add new Product</button> </a>
          <a href="../orders/ordersHome.php"> <button type="button" class="btn btn-warning">Go to view Orders</button> </a>

        <div class="posts-holder">
          <h5 style="margin-left: 0%;margin-top:10px;">Appointment</h5>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Appointment ID</th>
                      <th scope="col">Appointment Date</th>
                      <th scope="col">patient ID</th>
                      <th scope="col">Doctor ID</th>
                      <th scope="col">Department ID</th>
                      <th scope="col">Appointment Reason</th>
                    </tr>
                  </thead>
                  <?php foreach($appointment as $appointment){?>
              <tbody>
              <tr>
                  <th scope="row"><?php echo $appointment['appointmentID']?></th>
                  <td><?php echo $appointment['appointmentDate']?></td>
                  <td><?php echo $appointment['patientID_fk']?></td>
                  <td><?php echo $appointment['doctorID_fk']?></td>
                  <td><?php echo $appointment['departmentID_fk']?></td>
                  <td><?php echo $appointment['appointmentReason']?></td>
                  <td>
                  <a href="../appointmentPost.php?appoinintmentID=<?php echo $appointment['appointmentID'];echo $appointment['appointmentReason'];?>"><button type="button" class="btn btn-secondary">View</button></a>
                  <a href="../editProduct.php?appoinintmentID=<?php echo $appointment['appointmentid'];?>"><Button type="button" class="btn btn-primary">Edit</Button></a>
                  <Button type="button" class="btn btn-danger" name="<?php echo $appointment['appointmentID']; ?>" onClick="deleteProduct(<?php echo $appointment['appointmentID']; ?>)">Delete</Button>
                  </td>
              </tr>
              </tbody>
              <?php }?>
            </table>




<!--foote section-->
<?php
  include('footer.php');
  ?>

		
</body>
<script type="text/javascript">
      //Handling the Delete Event
			 function deleteProduct(x){
						var conf = confirm( "Are you sure you want to delete this product?");
						if(conf == true){              
              window.location = "delete.php?delete_id=" + x ;
							}
				}
      //Handling the logOut Event
      function logOut(){
        window.location = "adminLogOut.php";
      }
	</script>

</html>
<?php } ?>