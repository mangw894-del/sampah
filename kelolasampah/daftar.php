<?php
session_start();

$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar User - Kelola Sampah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #10B981 0%, #059669 100%);
        }
        .register-container {
            background-color: white;
            max-width: 450px;
            margin: 4rem auto;
            padding: 2.5rem 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .error {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-weight: 600;
            text-align: center;
        }
        label {
            font-weight: 600;
            color: #065f46;
        }
        input:focus, select:focus {
            outline: none;
            box-shadow: 0 0 0 3px #6ee7b7;
            border-color: #10b981;
        }
        button {
            background-color: #10B981;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="text-3xl font-bold text-green-700 mb-6 text-center">Daftar Akun Baru</h2>

        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form action="proses_daftar.php" method="post" class="space-y-5">
            <div>
                <label for="id" class="block mb-1">ID</label>
                <input type="text" name="id" id="id" required placeholder="Masukkan ID Anda" class="w-full border border-gray-300 rounded-md px-3 py-2" />
            </div>

            <div>
                <label for="username" class="block mb-1">Username</label>
                <input type="text" name="username" id="username" required placeholder="Masukkan username" class="w-full border border-gray-300 rounded-md px-3 py-2" />
            </div>

            <div>
                <label for="email" class="block mb-1">Email</label>
                <input type="email" name="email" id="email" required placeholder="Masukkan email" class="w-full border border-gray-300 rounded-md px-3 py-2" />
            </div>

            <div>
                <label for="password" class="block mb-1">Password</label>
                <input type="password" name="password" id="password" required placeholder="Masukkan password" class="w-full border border-gray-300 rounded-md px-3 py-2" />
            </div>

            <div>
                <label for="role" class="block mb-1">Role</label>
                <select name="role" id="role" required class="w-full border border-gray-300 rounded-md px-3 py-2">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="w-full text-white font-semibold py-3 rounded-md">Daftar</button>
        </form>

        <p class="mt-6 text-center text-green-700 font-semibold">
            Sudah punya akun? <a href="login.php" class="underline hover:text-green-900">Login di sini</a>
        </p>
    </div>
</body>
</html>
