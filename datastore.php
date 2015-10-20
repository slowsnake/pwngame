		<?php
		include "config.php";	 //Database connectivity file. 

		$user_name=$_POST["username"];
		$user_message=$_POST["message"];
		$user_ip=$_POST["ipaddress"];
				
		$sql="insert into tbl_data1 (user_name,user_message,user_ip) values('".$user_name."','".$user_message."','".$user_ip."')";

		if(mysql_query($conn,$sql)
			{
			echo "Recorded successfully";
			exit("hi");
		}
		else
		{
			echo "Error: <br>" . mysql_error($conn);

		}
		mysql_close($conn);
	
		?>