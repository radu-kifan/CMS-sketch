<?php

include APP_PATH . '/src/models/authModel.php';
include APP_PATH . '/src/models/authNew.php';
include APP_PATH . '/src/models/addText.php';

 
 

function mainDisplay() 
{
	 renderView('main.php');
	 }

function ToLogin(){
      
	renderView ('login.php');
}

function validateUser(){
 
     
  
    
    $status = !empty($_POST['status']) ? $_POST['status'] : '';
    $username = !empty($_POST['username']) ? $_POST['username'] : '';
	$password = !empty($_POST['password']) ? $_POST['password'] : '';
    $user = dbGetUser($username, $password,$status);
   
     
if ((is_array($user))&&($status=='administrator')){
    	 $_SESSION['user'] = $user;
    	 renderView('adminPage.php');}

else if ((is_array($user))&&($status=='editor')){
    	 $_SESSION['user'] = $user;
    	 renderView('editorPage.php');} 

else if ((is_array($user))&&($status=='utilizator')){
    	 $_SESSION['user'] = $user;
    	 renderView('userPage.php');}        

else {renderView('main.php');}

}




		    
     
   
    
  
  function ToNewUser(){
	renderView('newUser.php');
}
 
function SubmitedUser(){
	 if (!empty($_POST['first_name'])) {
		$first_name = $_POST['first_name'];
	} else {
		renderView('newUser.php', [
			'message' => 'Introdu prenume!',
			 ]);

		exit ;}

    if (!empty($_POST['last_name'])) {
		$last_name = $_POST['last_name'];
	} else {
		renderView('newUser.php', [
			'message' => 'Introdu nume!',
			 ]);
		exit;}

	if (!empty($_POST['username'])) {
		$username = $_POST['username'];
	} else {
		renderView('newUser.php', [
			'message' => 'Introdu nume user!',
			 ]);
		exit;}	
	 
    if (!empty($_POST['password'])) {
		$password = $_POST['password'];
	} else {
		renderView('newUser.php', [
			'message' => 'Introdu parola!',
			 ]);
		exit;}

    if (!empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		renderView('newUser.php', [
			'message' => 'Introdu adresa e-mail!',
			 ]);
		exit;}

	 header("Location:index.php?action=main");
	
	return User($first_name,$last_name,$username,$password,$email);	
}

function LogOut()
{
	unset($_SESSION['user']);
	session_destroy();
	header("Location:index.php?action=main");
}
 
	function addPost(){
	 if (!empty($_POST['titlu'])) {
		$titlu = $_POST['titlu'];
	} else {
		renderView('editorPage.php', [
			'message' => 'Introdu titlu!',
			 ]);

		exit ;}

    if (!empty($_POST['continut'])) {
		$last_name = $_POST['continut'];
	} else {
		renderView('editorPage.php', [
			'message' => 'Introdu continut!',
			 ]);
		exit;} 

	}	
