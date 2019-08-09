<?php include('signup.php'); ?>

<!DOCTYPE html>
	<html>
		<head>
			<title>quick post</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
			<body>
				<center><h2>Create a new account</h2></center>
				<form method="post" action="signup.php">
				<div class="container">

				<label>First Name</label>
				<input type="text" name="firstname" placeholder="First Name" required>

				<label>Last Name</label>
				<input type="text" name="lastname" placeholder="Last Name" required>

				<label>Email ID</label>
				<input type="text" name="emailid" placeholder="Email address" required><br>

				<label>Password</label>
				<input type="password" name="password" placeholder="Password" required><br>

				<label>Confirm Password</label>
				<input type="password" name="confirmpass" placeholder="Confirm password" required><br>
                
                <label>Mobile Number</label>
				<input type="number" name="mobileno" placeholder="Mobile Number" required><br>


				<label>Birth Date</label>
				<input type="date" name="birthdate" placeholder="Birth Date" required><br>

				<label>Gender</label>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female<br><br>

				<input type="checkbox" name="terms" value="agree" required>I agree with terms and conditions.<br><br>
  			
				<button type="submit" name="submit">Submit</button>
				
				

				</div>
			</form>


		</body>
	</html>