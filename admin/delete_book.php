<?php
	require("config.php");
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "manage_book.php";
</script>