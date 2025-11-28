<?php
// generate_nota.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jenis = $_POST['jenis'];
    $berat = floatval($_POST['berat']);
    $aksi = $_POST['aksi'];
    
    // Harga per kilo berdasarkan jenis sampah (sesuai tabel di index.php)
    $harga = [
        'Plastik' => 2000,
        'Kertas' => 1500,
        'Logam' => 5000,
        'Kaca' => 1000,
        'Organik' => 500
    ];
    
    if (isset($harga[$jenis])) {
        $harga_per_kg = $harga[$jenis];;
        $total = $harga_per_kg * $berat;
    } else {
        echo "Jenis sampah tidak valid.";
        exit;
    }
} else {
    header('Location: dasboarduser.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nota Jual Beli Sampah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Library untuk generate PDF dari HTML -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>
<body class="bg-gray-100 p-8 font-poppins">
    <div class="container mx-auto max-w-lg">
        <div id="nota" class="bg-white p-8 rounded-lg shadow-lg border border-gray-300">
            <h1 class="text-3xl font-bold text-center text-green-800 mb-6">Nota Jual Beli Sampah</h1>
            <div class="space-y-4 text-gray-800">
                <p><strong>Jenis Sampah:</strong> <?php echo htmlspecialchars($jenis); ?></p>
                <p><strong>Berat:</strong> <?php echo number_format($berat, 1, ',', '.'); ?> Kg</p>
                <p><strong>Harga per Kg:</strong> Rp <?php echo number_format($harga_per_kg, 0, ',', '.'); ?></p>
                <p><strong>Aksi:</strong> <?php echo htmlspecialchars($aksi); ?></p>
                <hr class="border-gray-300">
                <p class="text-xl font-semibold"><strong>Total:</strong> Rp <?php echo number_format($total, 0, ',', '.'); ?></p>
                <p class="text-sm text-gray-600">Tanggal: <?php echo date('d-m-Y H:i:s'); ?></p>
                <p class="text-sm text-gray-600">Dibuat oleh: KelolaSampah</p>
            </div>
        </div>
        <div class="text-center mt-6">
            <button onclick="generatePDF()" class="bg-green-700 hover:bg-green-900 text-white font-semibold px-6 py-3 rounded-lg shadow-lg transition">
                Cetak Nota sebagai PDF
            </button>
            <br>
            <a href="dasboarduser.php" class="text-green-700 hover:text-green-900 mt-4 inline-block">Kembali ke Beranda</a>
        </div>
    </div>

    <script>
        function generatePDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Menggunakan html2canvas untuk menangkap elemen nota
            html2canvas(document.getElementById('nota')).then(canvas => {
                const imgData = canvas.toDataURL('image/png');
                const imgWidth = 210; // Lebar A4 dalam mm
                const pageHeight = 295; // Tinggi A4 dalam mm
                const imgHeight = (canvas.height * imgWidth) / canvas.width;
                let heightLeft = imgHeight;
                let position = 0;
                
                // Tambahkan gambar ke PDF
                doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;
                
                // Jika nota lebih panjang dari satu halaman, tambahkan halaman baru
                while (heightLeft >= 0) {
                    position = heightLeft - imgHeight;
                    doc.addPage();
                    doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pageHeight;
                }
                
                // Simpan PDF
                doc.save('nota_jual_beli_sampah.pdf');
            });
        }
    </script>
</body>
</html>
