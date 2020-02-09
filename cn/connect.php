<?php
header('Content-type:text/html;charset=utf-8');
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'users';
$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno($conn)){
	die('<h2>连接失败</h2>'.mysqli_connect_error($conn));
}
mysqli_set_charset($conn,'utf8')
?>