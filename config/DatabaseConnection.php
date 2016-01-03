<?php
if(!isset($_SESSION['DATABASE_USER'])){
	$_SESSION['DATABASE_USER'] = "a8793446_root";
}
	/*Define constant to connect to database */
if(!isset($_SESSION['DATABASE_PASSWORD'])){
	$_SESSION['DATABASE_PASSWORD'] = "root123";
}	
if(!isset($_SESSION['DATABASE_HOST'])){
	$_SESSION['DATABASE_HOST'] = 'mysql12.000webhost.com';
}
if(!isset($_SESSION['DATABASE_NAME'])){
	$_SESSION['DATABASE_NAME'] = "a8793446_chessdb";
}
if(!isset($_SESSION['EMAIL'])){
	//This is the address that will appear coming from ( Sender )
	$_SESSION['EMAIL']= 'playchesstowin@gmail.com';
}
if(!isset($_SESSION['password'])){
	//This is the address that will appear coming from ( Sender )
	$_SESSION['password']= 'checkmate@1';
}	
	/*Default time zone ,to be able to send mail */
	date_default_timezone_set('UTC');
	
	
	
	// Make the connection:
	$dbc = @mysqli_connect($_SESSION['DATABASE_HOST'], $_SESSION['DATABASE_USER'], $_SESSION['DATABASE_PASSWORD'],
	    $_SESSION['DATABASE_NAME']);
	
	
	if (!$dbc) {
	    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
	}


?>
