<?php
function dbGetUser($username, $password,$status) 
{
	global $db;
	$query = "
		SELECT *
		FROM `utilizatori`
		WHERE `username` = ?
		AND `password` = ?
		AND `status` = ?
		LIMIT 1
	";
	$password = md5($password);

	$statement = $db->prepare($query);
	$statement->bind_param("sss", $username, $password,$status);
	$statement->execute();

	$result = $statement->get_result();

	return $result->fetch_array(MYSQLI_ASSOC);

	 
 }
?>

  