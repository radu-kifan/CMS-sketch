<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/login.css">
 </head>
 <body>
 

<?php if (!empty($data['message'])) { ?>
<div class="error-message">
	 <?=$data['message']?>
</div>
<?php } ?>

 <div class="contNou">
<h2>Creeaza cont nou:</h2>
<form action="index.php?action=adduser" method="POST">
	 <label>Prenume</label>
	<input type="text" name="first_name"/>
    <label>Nume</label>
	<input type="text" name="last_name"/>
    <label>Nume utilizator</label>
	<input type="text" name="username"/>
	<label>Parola</label>
	<input type="password" name="password"/>
	<label>Adresa email</label>
	<input type="email" name="email"/>
	<input type="submit" value="submit"/>
</form>
</div>

</body>
 </html>