<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$text = $_POST['comment'];
	
	$to = "alex.linberg07@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = "Wecan.care";
	$subject = "Wecan Partner";

	
	$msg="
    Имя: $name 
    Телефон: $phone 
    Email: $email 
    Комментарий: $text"; 	
	mail($to, $subject, $msg, "From: $from ");
?>


