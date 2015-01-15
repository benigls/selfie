<?php

  /**
   * Reply to a message
   * If you want to reply to a message later, instead of replying right away after receiving a message,
   * You can use this method
   */

  // Require Chikka SDK file
  require('../src/Chikka.php');

  // Set credentials
  $credentials = array(
    'client_id' => 'aa4c85ebb3144f2c9077da47dc9b3706c0fb157dd6cf95afb791b64153bbb80a',
    'secret_key'=> '5381c454570a39a2d4140a694702b83531176a965a95950ac066d72d16c34f5b',
    'shortcode' => '29290781'
  );

  // Request ID is received from Chikka (when a user sends a message to your shortcode, 
  // Chikka will notify you through your "Message Receiver URL")
  $requestId = '128_alphanumeric_characters';
  // Mobile number and message
  // Mobile number can have the prefix +63, 63, or 0
  $mobileNumber = '09494131408';
  $message = 'Hello world';

  // Instantiate Chikka (passing credentials)
  $chikka = new Chikka($credentials);

  // To reply to a message, you need to pass on the `request_id` and `mobile_number`
  // Therefore, if you're planning to reply to a message later, you have to secure these 2 parameters
  $reply = $chikka->reply($requestId, $mobileNumber, $message, 2);

  // If you don't want to specify a `message_id` as a 5th parameter in the reply() function,
  // A `message_id` is automatically generated (16 digits)
  // You can retrieve the `message_id` through the following
  $messageId = $reply->msg->message_id;

  // Check if message was sent
  if ($reply->success()) {

    echo 'Reply successfully sent';
  } else {
    // Print error message
    echo 'Reply not sent. ', $reply->message;
  }