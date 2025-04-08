
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'zubair440430@gmail.com' && $password === 'zubair120') {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Invalid request.";
}
?>
