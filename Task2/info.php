<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
	function get_data() {
		$name = $_POST['fname'];
		$file_name='myData'. '.json';

		if(file_exists("$file_name")) {
			$current_data=file_get_contents("$file_name");
			$array_data=json_decode($current_data, true);
							
			$extra=array(
				'firstname' => $_POST['fname'],
				'lastname' => $_POST['lname'],
				'age' => $_POST['age'],
				'designation' => $_POST['des'],
				'language' => $_POST['lan'],
				'email' => $_POST['mail'],
				'password' => $_POST['pw'],

			);
			$array_data[]=$extra;
			echo "file exist<br/>";
			return json_encode($array_data);
		}
		else {
			$datae=array();
			$datae[]=array(
				'Name' => $_POST['name'],
				'Branch' => $_POST['branch'],
				'Year' => $_POST['year'],
			);
			echo "file not exist<br/>";
			return json_encode($datae);
		}
	}

	$file_name='myData'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		echo 'success';
	}				
	else {
		echo 'There is some error';				
	}
}


// $target_dir = "uploads/";
//  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
//  { echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."; }
//   else { echo "Sorry, there was an error uploading your file."; }
	
?>
