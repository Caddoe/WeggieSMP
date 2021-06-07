<?php

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  
  $mailTo = "WeggieSMP@outlook.com";
  $header = "From: ".$name;
  
  
  mail($mailTo, $subject, $message, $header);
  header("Location: index.html?mailSend");
}


