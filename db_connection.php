<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "scan-o-car";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

 if($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
}