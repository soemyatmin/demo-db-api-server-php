<?php

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbName = "unitytest";

	$conn = new mysqli($servername,$username,$password,$dbName);


	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}else{
		//echo("Success");
	}

	$user_name = $_POST["usernamepost"];
	$user_password = $_POST["userpasswordpost"];

//	$user_name =  "Unity username1";
//	$user_password = "Unity Password1";

	$sql = "Select user_name,user_password from user where user_name ='".$user_name ."'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
			if($row['user_password'] == $user_password){
				echo "Success Login";
			}else{
				echo "Pass Failed";
			}
		}
	}else{
		echo "User Failed";
	}
?>