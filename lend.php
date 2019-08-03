<?php   
	require_once ('config.php');
	require ('session.php');
	if(isset( $_SESSION['login_user'])){
		// require ('header.php');
		if (isset($_POST['submit'])) {
			$lender = $_POST['lender'];
			$gName = $_POST['gName'];
			$gEmail = $_POST['gEmail'];
			$gPhone = $_POST['gPhone'];
			$gAmount = $_POST['gAmount'];
			$gReturn = $_POST['gReturn'];
			$address = $_POST['gAddress'];
			$sName = $_POST['sName'];
			$sAddress = $_POST['sAddress'];
			$sPhone = $_POST['sPhone'];

			$ssql = "INSERT INTO gbesetable (lender, g_name, g_email, g_phone, g_amount, g_returnDate, address, suretee_name, suretee_address, suretee_phone) VALUES ('$lender', '$gName', '$gEmail', '$gPhone', '$gAmount', '$gReturn', '$address', '$sName', '$sAddress', '$sPhone')";
			if($conn->query($ssql)){
              header("location: dashboard.php");
            }else{
              die('could not enter data: '. $conn->error);
            }
		}
		
?>
<!DOCTYPE html>
<html>
<head>
  <title>GBESE | LEND</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lend.css">
</head>
<body>
	<center><h3>If you want to lend people money, fill this form</h3></center>

<div class="lend">
	<form method="POST">
		<label>User</label><input type="text" name="lender" readonly value="<?php echo $_SESSION['login_user'] ?>"><br><br>
		<label>Borrower's Name</label><input class="form-group" type="text" name="gName" value="" required=""><br><br>
		<label>Borrower's Email</label><input class="form-group" type="text" name="gEmail" value="" required=""><br><br>
		<label>Borrower's phone</label><input class="form-group" type="tel" name="gPhone" value="" required=""><br><br>
		<label>Amount lent</label><input class="form-group" type="number" name="gAmount" value="" required=""><br><br>
		<label>Return Date</label><input class="form-group" type="date" name="gReturn" value="" required=""><br><br>
		<label>Borrower's Address</label><input class="form-group" type="text" name="gAddress" value="" required=""><br><br>
		<label>Suretee's Name</label><input class="form-group" type="text" name="sName" value=""><br><br>
		<label>Suretee's Address</label><input class="form-group" type="text" name="sAddress" value=""><br><br>
		<label>Suretee's Phone</label><input class="form-group" type="tel" name="sPhone" value=""><br><br>
		<input type="submit" name="submit" value="submit">
	</form>

</div>






















<?php 
	require ('footer.php'); 
} 
// session_destroy();
?>