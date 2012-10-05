<?php
	//take in the ajax post data, and if the data that was submitted was okay, post that back to the contact page

$name = '';
$email = '';
$message = '';
	function validateName($name){
		//if it's NOT valid
		if(strlen($name) < 4)
			return false;
		//if it's valid
		else
			return true;
	}
	function validateEmail($email){
		return ereg("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$", $email);
	}
	function validateMessage($message){
		//if it's NOT valid
		if(strlen($message) < 1)
			return false;
		//if it's valid
		else
			return true;
	}
?>

