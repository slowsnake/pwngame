<html>
	<body>
		<?php
		echo "Site under Constrction. Please visit again later";
		$client_ip = get_client_ip();
		
		echo "<br>Your ip address is ";
		echo "$client_ip";
		

		function get_client_ip() {
				    $ipaddress = '';
				    if (getenv('HTTP_CLIENT_IP'))
				        $ipaddress = getenv('HTTP_CLIENT_IP');
				    else if(getenv('HTTP_X_FORWARDED_FOR'))
				        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				    else if(getenv('HTTP_X_FORWARDED'))
				        $ipaddress = getenv('HTTP_X_FORWARDED');
				    else if(getenv('HTTP_FORWARDED_FOR'))
				        $ipaddress = getenv('HTTP_FORWARDED_FOR');
				    else if(getenv('HTTP_FORWARDED'))
				       $ipaddress = getenv('HTTP_FORWARDED');
				    else if(getenv('REMOTE_ADDR'))
				        $ipaddress = getenv('REMOTE_ADDR');
				    else
				        $ipaddress = 'UNKNOWN';
				    return $ipaddress;
						
								}

		?>

		<form name="user_details" action= "datastore.php" method="post">
			<input name="username" type=text value=name > <br>
			<input name="message" type=text value=message > <br>
			<input type=submit value="send Message">
			<?php echo "<input name=ipaddress type=hidden value=$client_ip >";  ?>


		</form>


	</body>
</html>