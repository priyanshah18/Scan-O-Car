<?php include('db_connection.php'); ?>
<?php
$datee = $_POST['logdate'];
$result = mysqli_query($conn,"Select * FROM logs where Date='$datee'");
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
<h4><a href="logdate.html"><label for="exampleInputEmail1"><b style="color:white;font-size:150%" class="bg-dark"><i class="fas fa-backward"></i>Back</b></label></a></h4>

<br><br><br><br>

<center>
<div>
<h1><span style="background-color: #E798EF">Logs</span></h1>
<table border="1" bgcolor="#E798EF" width="400" height="200">
<tr>
<th>Car Number</th>
<th>Date</th>
<th>Time</th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['Car_Number'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['Time'] . "</td>";
	echo "</tr>";
}
?>
</center>
</table>
</div>
</body>
</html>