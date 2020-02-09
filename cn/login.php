<?php
	require 'connect.php';
	$user_name = $_POST["user"];
	$user_password = $_POST["password"];
	$sql = "SELECT `password` FROM `users` WHERE `user`= '$user_name' ";
	$result = mysqli_query($conn,$sql);
	if ($result && mysqli_num_rows($result) >0) {
			$row = mysqli_fetch_array($result);
			$real_password = $row['password'];
			if ($user_password == $real_password) {
				echo "0";
			}else{
				echo "1";
			}
	}else{
		echo "2";
	}
	mysqli_free_result($result);
	mysqli_close($conn);
?>