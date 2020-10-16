<?php include('db_connection.php'); ?>
<?php include('seclogin.html'); ?>
<?php
$code = $_POST['code'];
$query = "SELECT * FROM `login_info` WHERE Org_code='$code'";
$mainresult = mysqli_query($conn,$query);
$mainrow = mysqli_num_rows($mainresult);
if($mainrow == 1){
	echo '<script> alert("Login Succesfull") </script>';
	echo "<script>window.location.href='scan.html';</script>";
    	exit;
}
else{
	echo '<script> alert("No such Organization/Building Code exits") </script>';	
}

?>
