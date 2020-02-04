<?php include('server/server.php')

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
    
    <style>
    label.form-label {
    display: inline-block;
    width: 30%;
	    font-weight: 400;
		letter-spacing: 1px;
		    vertical-align: top;
			text-align: left;
}
</style>
</head>
<body>
<!--nav bar-->
	<?php
  include('header.php');
  ?>
<!--end of nav bar-->
<table align ="center" border ="1px" style="width:1400px; line-height:30px;">
	<tr>
		<th colspan="12"><h2> Patient Details</h2><th>
	</tr>

			<th> ID </th>
			<th> Name </th>
			<th> DOB</th>
			<th> Weight </th>
			<th> Gender </th>
			<th> Address </th>
			<th> Contact </th>
			<th> Adm Date </th>
			<th> Time </th>
			<th> Email </th>
		

			<?php while($rows=mysqli_fetch_assoc($result))
			{
				?>
				<tr>
					<td> <?php echo $rows['patientID'];?> </td>
					<td> <?php echo $rows['patientName'];?> </td>
					<td> <?php echo $rows['DOB'];?> </td>
					<td> <?php echo $rows['patientWeight'];?> </td>
					<td> <?php echo $rows['bloodGroup'];?> </td>
					<td> <?php echo $rows['gender'];?> </td>
					<td> <?php echo $rows['patientAddress'];?> </td>
					<td> <?php echo $rows['contact'];?> </td>
					<td> <?php echo $rows['admDate'];?> </td>
					<td> <?php echo $rows['admTime'];?> </td>
					<td> <?php echo $rows['email'];?> </td>
				</tr>
				<?php
			 }
			 ?>

</table>

    </div>


	<!--foote section-->
  <?php 
  include('footer.php');
  ?>


</body>
</html>300px