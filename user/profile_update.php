<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"Library_Management_System");
	$query = "UPDATE users SET' name='[$_POST[name]'],email='$_POST[email]',address='$_POST[address]'";

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