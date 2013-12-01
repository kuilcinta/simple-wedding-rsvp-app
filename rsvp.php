<?php
        $mail_to_send_to = "joinusintheforest@gmail.com";
        $your_feedbackmail = "joinusintheforest@gmail.com";

        $sendflag = $_POST['sendflag'];
        if ( $sendflag == "send" )
        {
                $email = $_POST['email'] ;
                $yourname = $_POST['yourname'] ;
                if(empty($_POST['yourname'])){
                   echo "Empty username!";
                }
                $attendance = $_POST['attendance'] ;
                $headers = "From: $your_feedbackmail" . "\r\n" . "Reply-To: joinusintheforest@gmail.com" . "\r\n" ;
                $a = mail( $mail_to_send_to, "RSVP", $yourname, $attendance, $headers );
                if ($a) 
                {
                     header( "refresh:1; url=index.html" );
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
?>


<!--<form method="post" action="rsvp.php">
  <input type="hidden" name='sendflag' value="send">
  Your Email: <input name="email" type="text" /><br />
  Message:<br />
  <textarea name="message" rows="15" cols="40">
  </textarea><br />
  <input type="submit" />
</form>-->