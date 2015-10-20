		<?php
		include "config.php";	 //Database connectivity file. 

		$user_name=$_POST["username"];
		$user_message=$_POST["message"];
		$user_ip=$_POST["ipaddress"];
				
		//$sql="insert into tbl_data1 (user_name,user_message,user_ip) values('".$user_name."','".$user_message."','".$user_ip."')";
		$sql="insert into tbl_data1 (user_name,user_message,user_ip) values('".$user_name."','".$user_message."','".$user_ip."')";
		echo $sql;

		if(mysql_query($sql)
			{
			echo "Recorded successfully";
			
		}

		else
		{
			echo "Error: <br>" . mysql_error($conn);

		}
		mysql_close($conn);
	
		?>