<?php
if(isset($_POST['exampleInputEmail1']) && isset($_POST['Name']) && isset($_POST['message']) ){

	$email = $_POST['exampleInputEmail1'];
	$name = $_POST['Name'];
	$message = $_POST['message'];
	$email_to = "grantlouisherman041@gmail.com";
	$email_message = $email + " " + $name + " " + /n$message;

	@mail($email_to,$email_message)


}








?>