<?php
	require('config.php');
    $query = "insert into admin values(null,'$_POST[name]','$_POST[email]','$_POST[mobile_no]','$_POST[password]','$_POST[address]')";
    $query_run = mysqli_query($connection,$query);

?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>