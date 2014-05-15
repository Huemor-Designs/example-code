<?php
 	require_once('../PHPMailer-master/class.phpmailer.php');

 	// fields to be validated
	$name = $email = $phone = $tech_name = "";

	$required_fields = array("name", "email", "phone", "tech-name");
	
	foreach ($required_fields as $fieldname) {
		if (array_key_exists($fieldname, $_POST)) {
		} else {
			echo json_encode(array("success"=>false, "message"=>"You forgot the " . $fieldname . " field."));
			exit;
		}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name       = test_input($_POST["name"]);
		$email      = test_input($_POST["email"]);
		$phone      = test_input($_POST["phone"]);
		$tech_name  = test_input($_POST["tech-name"]);
	}

	$error_message = "";

	$string_exp = "/^[a-z0-9 ,.'-]+$/i";

	if(!preg_match($string_exp, $name)) {
		$error_message .= '<p>The Name you entered does not appear to be valid.</p>';
	}

	if(!preg_match($string_exp, $tech_name)) {
		$error_message .= '<p>The Name you entered does not appear to be valid.</p>';
	}
 
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	if(!preg_match($email_exp, $email)) {
		$error_message .= '<p>The email address you entered does not appear to be valid.</p>';
	}

	if(empty($phone) || strlen($phone) < 7) {
		$error_message .= '<p>The phone number you entered does not appear to be valid.</p>';
	}

	if ($_FILES['uploadFile']['error'] > 0) {
		switch ($_FILES['uploadFile']['error']) {
			case 1:
				$error_message .= '<p>The file is bigger than this PHP installation allows</p>';
				break;
			case 2:
				$error_message .= '<p>The file is bigger than this form allows</p>';
				break;
			case 3:
				$error_message .= '<p>Only part of the file was uploaded</p>';
				break;
			case 4:
				$error_message .= '<p>No file was uploaded</p>';
				break;
		}
	} else {

		//  5MB maximum file size 
		$MAXIMUM_FILESIZE = 5 * 1024 * 1024; 
		//  Valid file extensions (word) 
		$rEFileTypes = "/^\.(jpg|png|pdf){1}$/i";

		$isFile = is_uploaded_file($_FILES['uploadFile']['tmp_name']);
		$safe_filename = "";

		//  do we have a file?
		//  sanatize file name 
	    //     - remove extra spaces/convert to _, 
	    //     - remove non 0-9a-Z._- characters, 
	    //     - remove leading/trailing spaces 
	    //  check if under 5MB, 
	    //  check file extension for legal file types 
		if ($isFile) {
			$filename = $_FILES['uploadFile']['name'];
			$safe_filename = preg_replace( 
			                     array("/\s+/", "/[^-\.\w]+/"), 
			                     array("_", ""), 
			                     trim( $filename ) );
			
		    $isRightSize = false;
		    $isValidType = false;
		    $isRightLength = check_file_uploaded_length($safe_filename);
		    $isValidName = check_file_uploaded_name($safe_filename);

		    //check size
		    if ( $_FILES['uploadFile']['size'] <= $MAXIMUM_FILESIZE ) {
		    	$isRightSize = true;
		    }

		    //check type
		    if ( preg_match( $rEFileTypes, strrchr( $safe_filename, '.' ) ) ) {
		    	$isValidType = true;
		    } else {
		    	$error_message .= '<p>The file you upoaded is not a valid type (doc, docx, txt, rtf, pdf, odf). </p>';
		    }

		    //check name length
		    if ( !$isRightLength ) {
		    	$error_message .= '<p>The name of the file you uploaded is too long. </p>';
		    }

		    //checkname characters
		    if ( !$isValidName ) {
		    	$error_message .= '<p>The name of the file contains invalid characters. </p>';
		    }

		    if ( $isRightSize &&  $isValidType && $isRightLength && $isValidName) {
				$file_to_attach = $_FILES['uploadFile']['tmp_name'];
			}
		} 
	}

	if(strlen($error_message) > 0) {
		echo json_encode( array("success"=>false, "message"=>$error_message) );
		exit;
	}

	// Your code here to handle a successful verification
	$email_message  = "";
	$email_message .= "Name: " . $name . "\n";
	$email_message .= "Email: " . $email . "\n";
	$email_message .= "Phone: " . $phone . "\n";
	$email_message .= "Technician's Name: " . $tech_name . "\n";


	$to      = "norm@huemordesigns.com";
	$subject = "Technical Inquiry";

	$email            = new PHPMailer();
	$email->FromName  = "New Inquiry";
	$email->Subject   = $subject;
	$email->Body      = $email_message;
	$email->AddAddress( $to );
	$email->AddAttachment( $file_to_attach , $safe_filename );

	if ( $email->Send() ) {
		$customer_message = '<p>Your File has been sent.</p>';
		echo json_encode( array("success"=>true, "message"=>$customer_message) );
		exit;
	} else {
 		$customer_message = '<p>There was a problem submitting your form. Please try again in a moment.</p>';
		echo json_encode( array("success"=>false, "message"=>$customer_message) );
		exit;
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	/**
	 * Check $_FILES[][name]
	 *
	 * @param (string) $filename - Uploaded file name.
	 * @author Yousef Ismaeil Cliprz
	 */
	function check_file_uploaded_name ($filename)
	{

	    return (bool) ((preg_match("`^[-0-9A-Z_\.]+$`i",$filename)) ? true : false);
	}

	/**
	 * Check $_FILES[][name] length.
	 *
	 * @param (string) $filename - Uploaded file name.
	 * @author Yousef Ismaeil Cliprz.
	 */
	function check_file_uploaded_length ($filename)
	{
	    return (bool) ((mb_strlen($filename,"UTF-8") < 225) ? true : false);
	}
?>