<?php
	include('session.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$name=encrypt($_POST['name'],$secret);
		$username=encrypt($_POST['username'],$secret);
		$password=$_POST['password'];
		
		$uq=mysqli_query($conn,"select * from `user` where userid='$id'");
		$uqrow=mysqli_fetch_array($uq);
		// problem :(
		if ($password==$uqrow['password']){
			$newpassword=$password;
		}
		else{
			$newpassword=md5($password);
		}
		mysqli_query($conn,"update `user` set uname='$name', username='$username', password='$newpassword' where userid='$id'");
	}

?>