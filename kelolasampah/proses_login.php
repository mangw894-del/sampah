<<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ? AND username = ? AND email = ?");
    $stmt->bind_param("sss", $user_id, $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row;
            header("Location: dashboard.php");
        } else {
            header("Location: login.php?error=Password salah");
        }
    } else {
        header("Location: login.php?error=Data tidak cocok");
    }
}
?>
