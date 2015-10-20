<?php
		$server_name="localhost";
		$db_user="root"	;
		$db_pass="stupidpassword";
		$db_name="learn1";

		$conn = mysql_connect($server_name,$db_user,$db_pass);

		$dbSelect = mysql_select_db($db_name,$conn);

		if (!$conn) {

			die("Connection Failed " . mysql_connect_error);
					}

		else
			{
				echo "Connect Success";
				return 1;
			}

?>