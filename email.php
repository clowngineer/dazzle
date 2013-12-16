<?php 
  $email = $_POST['email'] ;
  $phone = $_POST['phone'];
  $message = $_POST['message'] ;
  $tomail = "junkcompany@junk.com";
  $subj = "From Dazzling-Interiors.com Web Site";
  $emess = "Name: ".$name."\n";
  $ehead = "From: ".$email."\r\n";
       
       $emess.= "Email: ".$email."\n";
       
       $emess.= "Phone or Text number: ".$phone."\n";
       
       $emess.= "Message: ".$message;
       
  
$mailsend=mail("$tomail","$subj","$emess","$ehead");
  print "Thank you; your email has been sent";
?>