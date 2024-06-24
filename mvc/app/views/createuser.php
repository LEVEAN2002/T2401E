<html>
<head>
	<title>Register Account</title>
	<style>
        body {
	background-color: #f2f2f2;
}

.register-container {
	width: 300px;
	background-color: #fff;
	padding: 20px;
	border: 1px solid #ddd;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	margin-top: 50px;
}

h1 {
	margin-top: 0;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="password"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}
    </style>
</head>
<body>
	<div class="register-container">
	<center>	<h1>Register Account</h1> </center>
		<form>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username"><br><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password"><br><br>
			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm-password"><br><br>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>