<?php
  $email = $_POST['email'];
  if(!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['name']) && !empty($_POST['message'])) {
    mail("florismartijnjansen@gmail.com", $_POST['subject'], "Van: " . $_POST['name'] . ", " . $email . "\n\n" . $_POST['message'], "From: $email");
  }
?>
