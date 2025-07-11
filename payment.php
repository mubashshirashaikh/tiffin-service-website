<?php
$name = $_POST['name'] ?? '';
$meal = $_POST['meal_name'] ?? '';
$price = $_POST['price'] ?? '';
echo "<h1>Thank you, $name</h1>";
echo "<p>Your order for $meal at Rs.$price has been received.</p>";
?>