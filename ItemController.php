<?php

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbName = "unitytest";

	$conn = new mysqli($servername,$username,$password,$dbName);

//	$conn = new mysqli("saveinyourbrain.000webhostapp.com","id2027702_soemyatmin","ilovedotahtz","id2027702_soemyatmindb");

	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}else{
		echo("Success ". mysqli_connect_error());
	}

	$sql = "Select * from playeritem";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)){
			echo "ID: ".$row['ID']. "| Name: ".$row['ItemName']. "| Type: ".$row['Type']. "| Price: ".$row['Price']."|;";
		}
	}
?>