		<?php
		include "config.php";	 //Database connectivity file. 

		$user_name=$_POST["username"];
		$user_message=$_POST["message"];
		$user_ip=$_POST["ipaddress"];
		//var_dump($_POST);
		


		//echo "Hello" .$user_name ."<br> Thanks for sending us the message <br> $user_message <br> Your IP is marked as $user_ip";
		
		$sql="insert into tbl_data1 (user_name,user_message,user_ip) values('".$user_name"','".$user_message"','".$user_ip")';
		echo "$sql";
		exit("hi");
		
//		
		//if(mysqli_query($conn,$sql)
			//{
			//echo "Recorded successfully";
		//}
		//else
		//{
			//echo "Error: <br>" . mysqli_error($conn);
//
		//}
		//mysqli_close($conn);
//	
		?>