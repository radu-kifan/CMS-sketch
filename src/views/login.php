<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="error-message">
				<?php echo !empty($data['message']) ? $data['message'] : ""?>
			</div>
<div class="login">
	<h2>Login:</h2>
<form action="index.php?action=check" method="POST">
	<label>username</label>
	<input type="text" name="username">
	<label>password</label>
	<input type="password" name="password">
	<label>status</label>
	<input type="text" name="status">
	<input type="submit" value="submit">
</form> 
</div> 
</body>
</html>