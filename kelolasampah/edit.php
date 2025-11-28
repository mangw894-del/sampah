<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['username'];
    $newEmail = $_POST['email'];

    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $newUsername, $newEmail, $user['id']);

    if ($stmt->execute()) {
        $_SESSION['user']['username'] = $newUsername;
        $_SESSION['user']['email'] = $newEmail;
        $success = "Profil berhasil diperbarui.";
    } else {
        $error = "Gagal memperbarui profil.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100">
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold text-green-700 mb-4">Edit Profil</h2>

        <?php if ($success): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?php echo $success; ?></div>
        <?php elseif ($error): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post" class="space-y-4">
            <input name="username" value="<?php echo htmlspecialchars($user['username']); ?>" class="w-full border p-2 rounded">
            <input name="email" type="email" value="<?php echo htmlspecialchars($user['email']); ?>" class="w-full border p-2 rounded">
            <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Simpan Perubahan</button>
        </form>

        <a href="logout.php" class="block text-center text-red-600 mt-4">Logout</a>
    </div>
</body>
</html>
