<?php
$conn = new mysqli("localhost", "username", "password", "tiffin_service");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>