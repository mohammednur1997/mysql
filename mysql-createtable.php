	

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// sql to create table
		$sql = "CREATE TABLE countries (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		    name VARCHAR(50) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table studnts created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}

		$conn->close();
		?> 