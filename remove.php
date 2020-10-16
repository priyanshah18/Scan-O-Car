<?php include('db_connection.php'); ?>
<?php
$result = mysqli_query($conn,"Select * FROM local_car_details");
?>
<?php
if(isset($_POST['remove'])) {
$carid = $_POST['carid'];
$delete = mysqli_query($conn,"DELETE FROM local_car_details WHERE Car_ID=('$carid')");
if($delete){ 
	echo '<script> alert("Record Deleted Succesfully") </script>'; 
} 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {
  background-image: url('download2.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
div {
  background-color: black;
  width: 750px;
  top: 10px;
  border: 0px solid green;
  padding: 100px;
  margin: 0px;
}
</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<h4><a href="dataview.php"><label for="exampleInputEmail1"><b style="color:white;font-size:150%" class="bg-dark"><i class="fas fa-backward"></i>Back</b></label></a></h4>

<center>
<div>
<h1><span style="background-color: #E798EF">Existing Record</span></h1>
<table border="1" bgcolor="#E798EF" width="600" height="400">
<tr>
<th>Car ID</th>
<th>Car Owner Name</th>
<th>Car Number</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['Car_ID'] . "</td>";
	echo "<td>" . $row['Car_Owner_Name'] . "</td>";
	echo "<td>" . $row['Car_Number'] . "</td>";
	echo "</tr>";
}
?>
</table>
<br>
<form method="post">
<span style="background-color: #E798EF">Enter the Car ID to be Removed:</span><br>
<input type="text" name="carid" placeholder="Enter Car ID" style="width:400px" required><br><br><br>
<button type="submit" class="btn btn-primary" name="remove" style="height:40px; width:200px">Remove</button>
</form>
</div>
</center>
</body>
</html>