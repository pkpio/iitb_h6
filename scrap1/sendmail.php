<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "kushalkothari@iitb.ac.in", "Feedback Form Results",
    $message, "From: $email" );
  header( "thankyou.html" );
?>