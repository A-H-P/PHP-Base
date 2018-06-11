<?php

require_once 'vendor/autoload.php';

// Create the transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587))
 ->setUsername('webforcelille2@gmail.com')
 ->setPassword('W3bforce')
 ->setEncryption('tls')
 ->setStreamOptions([
     'ssl' => [
         'verify_peer' => false,
         'verify_peer_name' => false
     ]
 ])
 ;

 // Create the mailer using your created Transport
 $mailer = new Swift_Mailer($transport);

 // Create a message
 $message = (new Swift_Message('Wonderful Subject'))
 ->setFrom(['john@doe.com' => 'John Doe'])
 ->setTo(['adrien.perot@live.fr'])
 ->setBody('Here is the message itself')
 ;

 // Send the message
 $result = $mailer->send($message);

 var_dump($result);