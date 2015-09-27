<?php
$name = $_GET["name"];
$to = "gamelabs@boun.cr";
$message = $_GET["message"];
$from = $_GET["email"];
$subject = "";
mail($to, $subject, $message, $from);
?>
<body onload="location.href = 'http://yoshifan509.github.io/GameLabs/';">Your message has been sent.</body>
