<?php

session_start();

	require('config.php');
	$mobile="";
	// $print=$_SESSION[id];
	// echo $print;
	// die;
	$mobile=$_POST['mobile_no'];
	echo $mobile;
	$query = "update admin set name  ='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile_no]' where id = '$_SESSION[id]'";
	echo $query;
	die;
	$query_run = mysqli_query($connection,$query);
	?>

<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>
