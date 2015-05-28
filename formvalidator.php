<?php

	//variables to hold values of each input

	$to = 'alex.iii.davis@gmail.com';
	$from= "From:".$_POST['name'];
	//if the submit button is clicked and there are values in all fields
	if($_POST['submit']){
	mail($to, $_POST['subject'], $_POST['message'], $from);
	$output = "<p>It Worked!</p>";
	}
?>
