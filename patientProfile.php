<?php

include('server/server.php');
include('functions/main.php');
$check = new Main;
$patientData=new Main;
$patientData=$patientData->getPatientData();
$check_login = $check->patientLogged_in();

if($check_login === false){
  header('Location: login.php');
}else{
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
<!--end of nav bar-->
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left pageBelowNav">
          <h6>Welcome <?php echo $_SESSION['email']?></h6>

          <a href="../addNewProduct.php"> <button type="button" class="btn btn-success">Edit Profile</button> </a>

        <div class="posts-holder">
          <h5 style="margin-left: 0%;margin-top:10px;">Profile</h5>
            <table class="table">
                  <thead>
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> DOB</th>
                        <th scope="col"> Weight </th>
                        <th scope="col"> Gender </th>
                        <th scope="col"> Address </th>
                        <th scope="col"> Contact </th>
                        <th scope="col"> Adm Date </th>
                        <th scope="col"> Time </th>
                        <th scope="col"> Email </th>
                    </tr>
                  </thead>
                  <?php foreach($patientData as $patientData){?>
              <tbody>
              <tr>
                  <th scope="row"><?php echo $patientData['patientID']?></th>
                  <td><?php echo $patientData['patientName']?></td>
                  <td><?php echo $patientData['DOB']?></td>
                  <td><?php echo $patientData['patientWeight']?></td>
                  <td><?php echo $patientData['bloodGroup']?></td>
                  <td><?php echo $patientData['gender']?></td>
                  <td><?php echo $patientData['patientAddress']?></td>
                  <td><?php echo $patientData['contact']?></td>
                  <td><?php echo $patientData['admDate']?></td>
                  <td><?php echo $patientData['admTime']?></td>
                  <td><?php echo $patientData['email']?></td>
                  <td>
                  <a href="patientProfile.php?patientID=<?php echo $patientData['patientID'];echo $appointment['patientName'];?>"><button type="button" class="btn btn-secondary">View</button></a>
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
</html>