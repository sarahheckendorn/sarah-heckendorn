<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer library with Google reCAPTCHA integration
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 **/

// require mail-config.php
require_once (dirname(__DIR__, 2) . "/vendor/autoload.php");

// require all composer dependencies
require_once("mail-config.php");

//verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	//if there's a reCAPTCHA error, throw an exception
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}

	/**
	 *Sanitize the inputs from the form: name, email, subject, and message. Using Jquery so implenting $_POST superglobal
	 **/
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	//create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * Attach the recipients to the message
	 *$MAIL_RECIPIENTS is set in mail-config.php
	 **/
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	/**
	 * attach the actual message to the message
	 **/

	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	/**
	 * Send the email via SMPT.
	 *
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage,$failedRecipients);

	/**
	 * the send method returns the number of recipients that accepted the email.
	 * if the number attempted !== number accepted it's an Exception
	 **/
	if($numSent !== count($recipients)) {
		throw(new RuntimeException("unable to send email"));
	}

	//report a successful send
	echo "<div class=\"alert alert-success\" role=\"alert\"><Email successfully sent.</div>";
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}