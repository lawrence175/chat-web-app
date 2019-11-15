<!DOCTYPE html>
<html>
<head>
	<title>web-chatApp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div id="main">
	<div id="info">
		<h2>login here</h2>

		<form action="back-end/login.php" method="post">
			<label><b>Username</b></label>
			<input type="text" name="uname" placeholder="User name" required><br><br>
			<label>Password</label>
			<input type="password" name="pass" placeholder="Password" required><br><br>
			<button style="background-color: #6495ed; color: white; " type="submit">
				<b>Login</b>
			</button>
		</form>
		<form action="back-end/signup.php" method="post">
			<h2>Do not have an account sign up here</h2>
			<label>Username:</label>
			<input type="text" name="uname" placeholder="Enter Username" required><br><br>
			<label>Email Add:</label>
			<input type="text" name="email" placeholder="Enter Email Address" required><br><br>
			<label>Password:</label>

			<input type="password" name="pass" placeholder="Enter Password" required><br><br>
			<button style="background-color: #6495ed; color: white; " type="submit">
				<b>Signup</b>
            </button>

		</form>
	</div>
	</div>
</body>
</html>