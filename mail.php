<?php

function mailto($message,$name,$email,$contact,$countryCode,$recipient_email){
//  $response = mail("oshin.barotia@crmlanding.in, aman.kumar@crmlanding.in, prahlad.uday@crmlanding.in","My subject",$message);
      
$mess = "Name : ". $name . "\nEmail : " .$email . "\nContact". $countryCode.$contact. "\nMessage : ".$message;
  mail("oshin.barotia@crmlanding.in, aman.kumar@crmlanding.in, prahlad.uday@crmlanding.in","My subject",$mess);
}
?>
