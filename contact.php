<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	$to = "rocilead@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "StormGain";
	$subject = "subject";

	
	$msg="
    Имя: $name 
    Телефон: $phone 
    Email: $email"; 	
	mail($to, $subject, $msg, "From: $from ");
?>


