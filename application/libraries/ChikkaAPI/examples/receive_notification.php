<?php

  /**
   * Receive notification from Chikka server
   * Note: In your Chikka API Settings, you need to edit the "Notification Receiver URL" and point it to this script
   * Example: http://website.com/chikka/receive_notification.php
   */

  // Require Chikka SDK file
  require('../src/Chikka.php');

  // Set credentials
  $credentials = array(
    'client_id' => 'aa4c85ebb3144f2c9077da47dc9b3706c0fb157dd6cf95afb791b64153bbb80a',
    'secret_key'=> '5381c454570a39a2d4140a694702b83531176a965a95950ac066d72d16c34f5b',
    'shortcode' => '29290781'
  );

  // Instantiate Chikka (passing credentials)
  $chikka = new Chikka($credentials);

  // Receive message
  $chikka->receiveNotification(function($notification) {
    // The Chikka_Notification object will be passed on as parameter in this callback
    if ($notification->sent()) {
      // Get message id
      $messageId = $notification->message_id;
      // Get cost here
      $cost = $notification->cost();

      // Do whatever you want about the information above
    }
    // Return true to tell Chikka that we received and accepted the message
    return true;
  });