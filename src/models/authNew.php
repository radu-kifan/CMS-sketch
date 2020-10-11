<?php

function User($first_name,$last_name,$username,$password,$email)
{
	global $db;

	$query = "
		INSERT INTO `utilizatori`
		SET
		   `first_name`=?,
			`last_name`=?,
			`username`=?,
			`password`=?,
			`email`=?
			  ";

    $password=md5($password);

	$statement = $db->prepare($query);
	$statement->bind_param("sssss",$first_name,$last_name,$username,$password,$email);
	$statement->execute();
  }