<?php
// daftar.php (contoh sederhana)
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Hash password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $passwordHash]);
        header('Location: login.php?success=Registrasi berhasil, silakan login');
        exit;
    } catch (PDOException $e) {
        header('Location: daftar.php?error=Username atau email sudah terdaftar');
        exit;
    }
}