<?php   
	require_once ('config.php');
	require ('session.php');
	if(isset( $_SESSION['login_user'])){
		require ('header.php');
		if (isset($_POST['submit'])) {
			$login_user = $_POST['user'];
			$sql = "INSERT INTO gbeseTable (lender) VALUES ('$login_user')";
			if($conn->query($sql)){
            	// header("location: dashboard.php");
            	echo "string";
            }else{
              die('could not enter data: '. $conn->error);
            }
		} else {
			echo $_POST['user'];
		}
		
?>

<div>
	<form method="POST">
		<input type="text" name="user" hidden="" value="<?php $user_check ?>">
		<button type="submit"><img src="photo.jpg" height="30px" width="20px"></button>
	</form>
</div>






















<?php 
	require ('footer.php'); 
}

?>