<?php  
	require ('config.php');
	// require ('header.php');
	session_start();

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		$sql = "INSERT INTO user (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
		if($conn->query($sql)){
              header("location: login.php");
            }else{
              die('could not enter data: '. $conn->error);
            }
	}
	

?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div>
	<h1>Sign Up</h1>
    <hr>
    <div class="signup-content">
        <form action="" method="POST">
            <div class="detail-input">
                <label for="text" class="">Full Name :</label>
                <input type="text" name="name" value="" class="form-input">

            </div>

            <div class="email">
                <label for="email" class="">E-mail:</label>
                <input type="email" name="email" value="" class="form-input">
            </div>
            <div class ="password">
                <label for="userpassword" class="">Password:</label>
               <input type="password" name="password" value="" class="form-input">
            </div>
            <button type="submit" name="submit" value="submit" class="form-input">Sign Up</button>
            <span> 
                <a href="login.php">
                    Already have an account? Log In
                </a>
            </span>

        </form>
    </div>
</div>

<?php  
	require ('footer.php');
?>
