		
		/* 
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";
 */
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "UPDATE employes SET roll='1300010' WHERE id=1";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}

		$conn->close();
		?> 