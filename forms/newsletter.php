<?php
$receiving_email_address = 'info@agapao.co.tz';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['email'];
$contact->from_email = $_POST['email'];
$contact->subject = "New Subscription: " . $_POST['email'];

// Add message
$contact->add_message($_POST['email'], 'Email');

// Send and respond properly
$response = $contact->send();

if ($response === 'OK') {
  echo 'Subscription successful.';
} else {
  echo 'Error: ' . $response;
}


