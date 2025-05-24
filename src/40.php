<?php
// This PHP code snippet demonstrates how to perform basic operations such as variable assignments,
// conditional statements, loops, and basic error handling in a simple GitHub project setup.

$studentName = "John Doe";
$age = 18;
$email = "john@example.com";

if ($age >= 18) {
    echo "You are old enough to vote.";
} else {
    echo "Sorry, you're not old enough to vote. Please wait until you reach the legal voting age.";
}

echo "<br>";
echo "The PHP code snippet above demonstrates basic operations such as variable assignments,
conditional statements, loops, and error handling in a simple GitHub project setup.";

// Example of user input
$userInput = $_POST['username'];

if (empty($userInput)) {
    echo "Username cannot be empty.";
} else {
    $hashedPassword = password_hash($userInput, PASSWORD_DEFAULT);
}

echo "The password for the username '$userInput' is: $hashedPassword";

// Example of a loop
for ($i = 0; $i < 5; $i++) {
    echo "Iteration number: $i\n";
}
