<?php  
	include_once ('config.php');
	$select = "DELETE FROM gbesetable where id='".$_GET['del_id']."'";
	$query = mysqli_query($conn, $select) or die();
	header("location: dashboard.php");
?>