<?php
 	require_once('../PHPMailer-master/class.phpmailer.php');

 	// fields to be validated
	$name = $email = $phone = $pet_type = $pet_age = $pet_sex = $medication_name = $prescription_number = "";

	$required_fields = array("name", "email", "phone", "medication-name", "pet-type", "pet-sex", "pet-age", "prescription-number");
	
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
		$pet_type   = test_input($_POST["pet-type"]);
		$pet_age    = test_input($_POST["pet-age"]);
		$pet_sex    = test_input($_POST["pet-sex"]);
		$medication_name        = test_input($_POST["medication-name"]);
		$prescription_number    = test_input($_POST["prescription-number"]);
	}

	$error_message = "";

	$string_exp = "/^[a-z0-9 ,.'-]+$/i";

	if(!preg_match($string_exp, $name)) {
		$error_message .= '<p>The Name you entered does not appear to be valid.</p>';
	}
 
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	if(!preg_match($email_exp, $email)) {
		$error_message .= '<p>The email address you entered does not appear to be valid.</p>';
	}

	if(empty($phone) || strlen($phone) < 7) {
		$error_message .= '<p>The phone number you entered does not appear to be valid.</p>';
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
	$email_message .= "Pet Type: " . $pet_type . "\n";
	$email_message .= "Pet Sex: " . $pet_sex . "\n";
	$email_message .= "Pet Age: " . $pet_age . "\n";
	$email_message .= "Medication Name: " . $medication_name . "\n";
	$email_message .= "Prescription #: " . $prescription_number . "\n";

	$to      = "norm@huemordesigns.com";
	$subject = "Prescription Re-fill Request";

	$email            = new PHPMailer();
	$email->FromName  = "Alison Animal Hospital";
	$email->Subject   = $subject;
	$email->Body      = $email_message;
	$email->AddAddress( $to );

	if ( $email->Send() ) {
		$customer_message = '<p>Your prescription re-fill request has been sent.</p>';
		echo json_encode( array("success"=>true, "message"=>$customer_message) );
		exit;
	} else {
 		$customer_message = '<p>There was a problem submitting your form. Please try again in a moment</p>';
		echo json_encode( array("success"=>false, "message"=>$customer_message) );
		exit;
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>