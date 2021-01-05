<?php
session_start();
	include "config.php";
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"Library_Management_System");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "update users set name  ='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile_no]' where id = '$_SESSION[id]'";


	$query_run = mysqli_query($connection,$query);
	if($query_run)
	{
		echo "true";
	}else
	{
		echo  "not true";

	}
	die;
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "user_dashboard.php";
</script>