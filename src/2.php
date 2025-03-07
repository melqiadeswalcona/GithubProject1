 <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    if ($age > 18) {
        echo "Hello $name! You are an adult.";
    } else {
        echo "Hello $name! You are a minor.";
    }
 ?>