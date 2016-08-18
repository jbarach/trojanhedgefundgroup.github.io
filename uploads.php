<?php
	require_once('php/class.phpmailer.php');
		$filename='asdasd';//date("Y-m-d-h-i-s");
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["uploadme"][$filename]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["addbutton"])) {

    			$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$addButton = $_POST['addbutton'];
				$txt = "You've received a message from".$name ."at ".$email.".  The message is listed below:\n".$message;
				$headers = "From: admin@example.com" . "\r\n" ;//swap admin@example.com with admin@url url being our domain
				$email = new PHPMailer();
				$email->From      = 'admin@example.com';
				$email->FromName  = 'Site Admin';
				$email->Subject   = 'Trojan Investment Contact us';
				$email->Body      = $txt;
				$email->AddAddress( 'SUBSITUTEWITHJOSH@example.com' );

				$email->AddAttachment( $filepath , 'upload.pdf' );
				return $email->Send();

				$url='index.php';
  				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';


			}
		

		?>