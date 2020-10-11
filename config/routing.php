<?php


$routes = [
	'main' => [
		'controller' => 'MainController.php',
		'function' => 'mainDisplay'],

   'login' => [  
		'controller'=> 'MainController.php',
		'function' => 'ToLogin'],
	 			
   'check' => [
      'controller'=> 'MainController.php',
      'function' => 'validateUser'],

    'newuser' =>[
     'controller'=> 'MainController.php',
     'function'=> 'ToNewUser'
    ],

    'adduser' =>[
     'controller'=> 'MainController.php',
     'function'=> 'SubmitedUser'],

     'addpost' =>[
     'controller'=> 'MainController.php',
     'function'=> 'addPost'],


];		