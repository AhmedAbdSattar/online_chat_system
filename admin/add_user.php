<?php
	include('session.php');
	include('DES.php');
	if(isset($_POST['adduser'])){
		$name=encrypt($_POST['name'],$secret);
		$username=encrypt($_POST['username'] ,$secret);
		$password=encrypt(md5($_POST['password']),$secret);
		$access=$_POST['access'];
		
		mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$name', '$username', '$password', '$access')");
	}

?>