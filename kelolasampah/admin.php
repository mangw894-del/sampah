 <?php
include 'koneksi.php';
session_start();

// Contoh ambil data login dari form
$id       = $_POST['id'];
$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
$role     = $_POST['role'];

// Query untuk cek login (contoh)
$sql = "SELECT * FROM admin WHERE id='$id' AND username='$username' AND email='$email' AND password='$password' AND role='$role'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika login berhasil
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    if ($role == 'admin') {
        header("Location: dasboardadmin1.php");
    } else {
        header("Location: dasboarduser.php");
    }
} else {
    // Jika gagal login
    header("Location: login.php?error=ID atau password salah!");
}
?>