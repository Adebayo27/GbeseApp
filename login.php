<?php  
	require('config.php');
	// require ('header.php');
	session_start();
	if (isset($_POST['submit'])) {
		$myEmail = mysqli_real_escape_string($conn, $_POST['email']);
      	$myPassword = mysqli_real_escape_string($conn, $_POST['password']);
		$sql = "SELECT * FROM user WHERE email = '$myEmail' AND password = '$myPassword'";
      	$result = mysqli_query($conn,$sql);
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$active = $row['active'];

      
      	$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	if($count == 1) {
      	    $_SESSION['login_user'] = $myEmail;
         	header("location: dashboard.php");
      	}else {
        	$error = "Your Login Name or Password is invalid";
      	}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log IN</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<h1>Log In</h1>
    <hr>
    <main class="content">
        <form action="" method="post">
            <div class="detail-input">
                <label for="email" class=""> Email Address</label>
               <input type = "text" name = "email" required="" value="" class="form-input" /> 
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type = "password" name = "password" value="" class="form-input"/>
            </div>
            <button type = "submit" value = "submit" name="submit" class="button">Log In</button>
            <span> 
                <a href="sign-up.php">
                    Don't have an account? Sign Up
                </a>
            </span>
        </form>
    </main>
