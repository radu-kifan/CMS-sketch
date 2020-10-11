<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();



define("APP_PATH",'D:/xampp/htdocs/cms');

require_once(APP_PATH . '/src/helpers/db_connection.php');
require_once(APP_PATH . '/src/helpers/rendering.php');

require_once(APP_PATH . '/config/routing.php');
 

$controllersPath = APP_PATH . '/src/controllers/';

$action = !empty($_GET['action']) ? $_GET['action'] : 'default';
$skipRedirect = [
	'main',
	'login',
	'check',
	'newuser',
	'adduser',
];
if(empty($_SESSION['user']) && !in_array($action,$skipRedirect) ) {
	header('Location: index.php?action=main');
}

if (array_key_exists($action, $routes)) {
	require_once($controllersPath . $routes[$action]['controller']);
	$metoda = $routes[$action]['function'];
	$metoda();
} 
 
   
  
?>

