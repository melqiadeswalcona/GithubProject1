<?php
// This PHP script will generate a random string.
$randomString = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 1);
echo "Your random string is: " . $randomString;
