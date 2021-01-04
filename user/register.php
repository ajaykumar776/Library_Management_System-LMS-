<?php
	$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"Library_Management_System");
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[mobile_no]','$_POST[password]','$_POST[address]')";
    $query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>