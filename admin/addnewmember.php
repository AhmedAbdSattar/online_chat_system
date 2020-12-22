<?php
	include('../conn.php');
	include('DES.php');
	$id=$_REQUEST['id'];
	$user=$_POST['user'];
	//bug :(
	if (empty($user)){
	?>
		<script>
			window.alert('Please select user');
			window.history.back();
		</script>
	<?php
	}
	else{
	mysqli_query($conn,"insert into chat_member (userid, chatroomid) values ('$user','$id')");
	
	?>
		<script>
			window.alert('Member Added Successfully');
			window.history.back();
		</script>
	<?php
	}
?>