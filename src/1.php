<?php
$username = 'John Doe';
$email = 'johndoe@example.com';
$message = 'Welcome to our website!';

echo "Hello $username";
mail($email, 'Welcome', $message);
?>