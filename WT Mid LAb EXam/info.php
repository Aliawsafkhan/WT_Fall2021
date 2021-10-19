<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		$name = $_POST['fname'];
		

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			
			$extra=array(
				'firstname' => $_POST['fname'],
				'lastname' => $_POST['lname'],
                'email' => $_POST['mail'],
				
				'gender' => $_POST['gender'],
                'mobile number' => $_POST['mnumber'],
                'ssc result' => $_POST['ssc'],
                'hsc result' => $_POST['hsc'],
                'year' => $_POST['yr'],
                'semester' => $_POST['sm'],
				

			);
			