<?php
	$email = $_POST['inputEmail'];
	$pswd = $_POST['inputPasswd'];

	$conn = mysqli_connect("database-1.c5r5ecfgjs1g.us-east-1.rds.amazonaws.com", "admin", "adminpwd", "www_project", "3306");
	if(!$conn){
		echo "Cannot connecto to database " . mysqli_connect_error($conn);
		exit;
	}

	$query = "SELECT username, password FROM admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty!";
		exit;
	}

	while ($row = mysqli_fetch_assoc($result)){
		if($email == $row['username'] && $pswd == $row['password']){
			echo "Welcome admin! Long time no see";
			break;
		}
	}
?>
