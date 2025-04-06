<?php
header('Content-Type: application/json');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$allowed_email = "zubair440430@gmail.com";
$allowed_password = "zubair120";

if ($email === $allowed_email && $password === $allowed_password) {
    echo json_encode(["status" => "ok", "idClient" => 1]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid Credentials"]);
}
?>
