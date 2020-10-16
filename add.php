<?php include('db_connection.php'); ?>
<?php
if(isset($_POST['add'])) {
$name = $_POST['ownername'];
$number = $_POST['carnumber']; 
$result = mysqli_query($conn,"INSERT INTO local_car_details(Car_ID, Car_Owner_Name, Car_Number) VALUES (' ','$name','$number')");
if($result){ 
	echo '<script> alert("Record Added Succesfully") </script>'; 
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
  width: 650px;
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
<h1><span style="background-color: #E798EF">Enter the data to be added:</span></h1><br><br>
<form method="post">
<span style="background-color: #E798EF">Car Owner Name:</span><br>
<input type="text" name="ownername" placeholder="Enter Car Owner Name" style="width:400px" required><br><br><br>
<span style="background-color: #E798EF">Car Number:</span><br>
<input type="text" name="carnumber" placeholder="Enter Car Number" style="width:400px" required><br><br><br>
<button type="submit" class="btn btn-primary" name="add" style="height:40px; width:200px">Add</button>
</form>
</div>
</center>
</body>
</html>