<?php


$url="https://sqs.us-east-1.amazonaws.com/492753146746/reqQ";
// Send a message to the queue using the AWS SDK for PHP function, send_message.
$sndmessage = $sqs->send_message($url, 'HAVE A NICE DAY');

// The message body is an array element in the CFResponse Object [header].
$message = $sndmessage->header['x-aws-body'];

// Print the sent message.
echo '<h2>SEND MESSAGE</h2>';
print '<pre>' . print_r($message, true) . '<pre><br/><br/>';

?>
