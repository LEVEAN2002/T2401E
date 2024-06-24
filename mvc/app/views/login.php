<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
	background-color: #f0f0f0;
	font-family: Arial, sans-serif;
}

.container {
	width: 300px;
	background-color: #fff;
	padding: 20px;
	border: 1px solid #ddd;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0,0,0,0.1);
	margin: 40px auto;
}

form {
	display: flex;
	flex-direction: column;
	align-items: center;
	padding: 20px;
}

label {
	margin-bottom: 10px;
}

input[type="text"], input[type="password"] {
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
    <?php
    
    $err;
    if(isset($_REQUEST["err"])){
        $err=$_REQUEST["err"];
    }
    ?>
</head>
<body>
	<div class="container">
    <form action="http://localhost/mvc/user/login" method="POST">
			<h2>Login</h2>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required> 
            <span><?php  echo isset($err) && $err == true  ?  "Invalid username or password" : ""; ?></span><br>
            <a href="http://localhost/mvc/user/create">bạn chưa có tài khoản đăng kí tại đây</a>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>
</body>
</html>