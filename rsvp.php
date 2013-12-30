<?php
require_once 'Swift-5.0.2/lib/swift_required.php';

$yourname = $_POST['yourname'] ;
$partysize = $_POST['partysize'] ;
$attendance = $_POST['attendance'] ;

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('joinusintheforest@gmail.com')
  ->setPassword('june212014');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('-- RSVP NOTICE --')
  ->setFrom(array('joinusintheforest@gmail.com' => 'RSVP'))
  ->setTo(array('joinusintheforest@gmail.com'))
  ->setBody('Name: ' .$yourname ."\n"
.'Party of: ' .$partysize ."\n"
.'RSVP: ' .$attendance ."\n" );

// Send the message
$result = $mailer->send($message);

/*if ($result)
{
header('Location: index.html');
}
echo $result;*/
?>
