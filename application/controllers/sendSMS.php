<?php

  /**
   * Sending SMS with the Chikka API
   */

  // Require Chikka SDK file
  require('../libraries/ChikkaAPI/src/Chikka.php');

  // Set credentials
  $credentials = array(
    'client_id' => 'aa4c85ebb3144f2c9077da47dc9b3706c0fb157dd6cf95afb791b64153bbb80a',
    'secret_key'=> '5381c454570a39a2d4140a694702b83531176a965a95950ac066d72d16c34f5b',
    'shortcode' => '29290781'
  );

  // Instantiate Chikka (passing credentials)
  $chikka = new Chikka($credentials);

  // Mobile number and message
  // Mobile number can have the prefix +63, 63, or 0
  $mobileNumber = '09494131408';
  $message = 'Hello world';

  // Send SMS ($send will contain the Chikka_Response object)
  $send = $chikka->send($mobileNumber, $message);

  // If you don't want to specify a `message_id` as a 3rd parameter in the send() function,
  // A `message_id` is automatically generated (16 digits)
  // You can retrieve the `message_id` through the following
  $messageId = $send->msg->message_id;

  // Check if message was sent
  if ($send->success()) {

    echo 'Message successfully sent';
  } else {
    // Print error message
    echo 'Message not sent. ', $send->message;
  }