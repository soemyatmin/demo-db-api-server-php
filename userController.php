<?php

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbName = "unitytest";

	$conn = new mysqli($servername,$username,$password,$dbName);

	$user_name = $_POST["usernamepost"];
	$user_password = $_POST["userpasswordpost"];
	$android_id = $_POST["androidpost"];

	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}

	$sql = "Insert into user (user_name,user_password,android_id) 
	values ('".$user_name."','".$user_password."','".$android_id."')";
	$result = mysqli_query($conn,$sql);

	if(!$result) echo "error";
	else echo "ok";

?>