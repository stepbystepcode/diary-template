<?php
	require 'connect.php';
	$user_name = $_POST["user"];
	$user_password = $_POST["password"];
	$sql = "SELECT `password` FROM `users` WHERE `user`= '$user_name' ";
	$result = mysqli_query($conn,$sql);
	if ($result && mysqli_num_rows($result) >0) {
		$return = "去登录吧";
	}else{
		$add = "INSERT INTO `users` (`user`,`password`) VALUES ('$user_name','$user_password')";
		if (mysqli_query($conn, $add)) {
			$return = "成功";
		}
	}?>
	<script>
var callback = '<?php echo $return;?>';
	</script>
<?php
	mysqli_free_result($result);
	mysqli_close($conn);
?>