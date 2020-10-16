<?php include('db_connection.php'); ?>
<?php
error_reporting(E_ALL ^ E_NOTICE); 
$resultnumber = mysqli_query($conn,"SELECT * FROM `carnumber`");
while($row = mysqli_fetch_array($resultnumber)){
	$carnumber = $row['number'];
}
if($carnumber == ""){
	echo '<script> alert("Car Number not found. You can add the number physically") </script>';
	echo "<script>window.location.href='physically.php'; </script>";
    	exit;
}
else{
	$result = mysqli_query($conn,"SELECT * FROM `local_car_details` WHERE Car_Number='$carnumber'");
	$numusers = mysqli_num_rows($result);
	$add = mysqli_query($conn,"INSERT INTO `logs`(`Car_Number`, `Date`, `Time`) VALUES ('$carnumber' ,CURRENT_DATE ,CURRENT_TIME)");
	if($numusers == 1){
		echo '<script> alert("Allow Entrty") </script>';
		$del = mysqli_query($conn, "DELETE FROM `carnumber`");
		echo "<script>window.location.href='scan.html';</script>";
    		exit;
	}
	else{
		$addguest = mysqli_query($conn,"INSERT INTO `guest_cars`(`Car_ID`, `Car_Number`) VALUES (' ','$carnumber')");
		echo '<script> alert("New Vehicle! Deny Entry!") </script>';
		$del = mysqli_query($conn, "DELETE FROM `carnumber`");
		echo "<script>window.location.href='scan.html';</script>";
    		exit;
	}
}
?>
<?php include('scan.html');?>