<?php
	$server_name="localhost";
		$db_user="root"	;
		$db_pass="gamerej447";
		$db_name="learn1";

		$conn = mysqli_connect($server_name,$db_user,$db_pass,$db_name);

		if ($conn->connect_error) {

			die("Connection Failed" . $conn->connect_error);
		}
		else
			{echo "Connect Success";}

?>