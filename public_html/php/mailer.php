<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer library with Google reCAPTCHA integration
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 */

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
	 */
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	//create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * Attach the recipients to the message
	 *$MAIL_RECIPIENTS is set in mail-config.php
	 */
	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	//attach the subject line to the message
	$swiftMessage->setSubject($subject);
}