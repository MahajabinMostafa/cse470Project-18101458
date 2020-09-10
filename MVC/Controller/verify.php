<?php
	$email = $_POST['inputEmail'];
	$pswd = $_POST['inputPasswd'];

	$conn = mysqli_connect("localhost", "root", "", "bookstore");
	if(!$conn){
		echo "Cannot connect to database " . mysqli_connect_error($conn);
		exit;
	}

	$query = "SELECT name, pass FROM admin";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty!";
		exit;
	}

	while ($row = mysqli_fetch_assoc($result)){
		if($email == $row['name'] && $pswd == $row['pass']){
			echo "Welcome admin! Long time no see";
			break;
		}
	}
?>
