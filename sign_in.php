<?php include('connection.php'); ?>

<!DOCTYPE html>
	<html>
		<head>
			<title>quick post</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
			<body>
				<center><h2>Sign In</h2></center>

				<form method="post" action="connection.php">
				<div class="container">
				<label>Email ID</label>
				<input type="text" name="emailid" placeholder="Email address" required><br>

				<label>Password</label>
				<input type="password" name="password" placeholder="Password" required><br><br>

				<button type="submit" name="submit">Submit</button>

				</div>
			</form>


		</body>
	</html>
