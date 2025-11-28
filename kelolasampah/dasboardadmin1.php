<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kelola Sampah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .sidebar {
            background: linear-gradient(135deg, #10B981 0%, #059669 100%);
        }
        
        .btn-primary {
            background-color: #10B981;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(16, 185, 129, 0.3); 
        }
        
        .btn-danger {
            background-color: #EF4444;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            background-color: #DC2626;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(239, 68, 68, 0.3); 
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-green-600">KelolaSampah</span>
                <span class="ml-4 text-gray-600">Dashboard Admin</span>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Selamat datang, Admin</span>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar text-white w-64 min-h-screen p-6">
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="#dashboarduser.php" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Dashboard</a>
                    </li>
                    <li>
                        <a href="dasboarduser.php" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Dashboard User</a>
                    </li>
                    <li>
                        <a href="#statistik" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Statistik</a>
                    </li>
                    <li>
                        <a href="#pengguna" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Pengguna</a>
                    </li>
                    <li>
                        <a href="#pengaturan" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Pengaturan</a>
                    </li>
                    <li>
                    <a href="landingpage.php" class="block py-2 px-4 rounded-lg hover:bg-green-700 transition">Logout</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Dashboard Overview -->
            <section id="dashboard" class="mb-8">
                <h1 class="text-3xl font-bold mb-6">Dashboard Admin</h1>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-2xl font-bold text-green-600" id="total-sampah">1,250</h3>
                        <p class="text-gray-600">Total Sampah Dikelola (Ton)</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-2xl font-bold text-green-600" id="daur-ulang">450</h3>
                        <p class="text-gray-600">Sampah Didaur Ulang (Ton)</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-2xl font-bold text-green-600">15</h3>
                        <p class="text-gray-600">Lokasi Pengumpulan</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-2xl font-bold text-green-600">98%</h3>
                        <p class="text-gray-600">Efisiensi Sistem</p>
                    </div>
                </div>
            </section>

            <!-- Kelola Sampah Section -->
            <section id="kelola-sampah" class="mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Kelola Sampah</h2>
                    <button class="btn-primary text-white px-4 py-2 rounded-lg" onclick="openModal('add')">Tambah Sampah Baru</button>
                </div>
                
                <!-- Table for Sampah Data -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Sampah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Volume (Ton)</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="sampah-table-body" class="bg-white divide-y divide-gray-200">
                            <!-- Data akan diisi oleh JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Statistik Section -->
            <section id="statistik" class="mb-8">
                <h2 class="text-2xl font-bold mb-6">Statistik Sampah</h2>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <canvas id="sampahChart" width="400" height="200"></canvas>
                </div>
            </section>
        </main>
    </div>

    <!-- Modal for Add/Edit Sampah -->
    <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg font-medium text-gray-900" id="modal-title">Tambah Sampah Baru</h3>
                <div class="mt-2 px-7 py-3">
                    <form id="sampah-form">
                        <input type="hidden" id="sampah-id">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="jenis">Jenis Sampah</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="jenis" type="text" placeholder="Masukkan jenis sampah" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="volume">Volume (Ton)</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="volume" type="number" placeholder="Masukkan volume" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="lokasi">Lokasi</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lokasi" type="text" placeholder="Masukkan lokasi" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="status" required>
                                <option value="Belum Diproses">Belum Diproses</option>
                                <option value="Dalam Proses">Dalam Proses</option>
                                <option value="Didaur Ulang">Didaur Ulang</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="flex items-center px-4 py-3">
                    <button id="modal-submit" class="btn-primary text-white px-4 py-2 rounded-lg mr-2" onclick="submitForm()">Simpan</button>
                    <button class="bg-gray-500 text-white px-4 py-2 rounded-lg" onclick="closeModal()">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 KelolaSampah. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data sampah disimpan dalam array
        let sampahData = [
            { id: '001', jenis: 'Plastik', volume: 50, lokasi: 'Jakarta', status: 'Didaur Ulang' },
            { id: '002', jenis: 'Organik', volume: 30, lokasi: 'Bandung', status: 'Dalam Proses' },
            { id: '003', jenis: 'Kertas', volume: 20, lokasi: 'Surabaya', status: 'Belum Diproses' }
        ];

        let nextId = 4; // Counter untuk ID baru

        // Fungsi untuk render tabel
        function loadTable() {
            const tbody = document.getElementById('sampah-table-body');
            tbody.innerHTML = '';
            sampahData.forEach(item => {
                const statusClass = item.status === 'Didaur Ulang' ? 'bg-green-100 text-green-800' :
                                   item.status === 'Dalam Proses' ? 'bg-yellow-100 text-yellow-800' :
                                   'bg-red-100 text-red-800';
                const row = `
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">${item.id}</td>
                        <td class="px-6 py-4 whitespace-nowrap">${item.jenis}</td>
                        <td class="px-6 py-4 whitespace-nowrap">${item.volume}</td>
                        <td class="px-6 py-4 whitespace-nowrap">${item.lokasi}</td>
                        <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${statusClass}">${item.status}</span></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="btn-primary text-white px-3 py-1 rounded text-sm mr-2" onclick="openModal('edit', '${item.id}')">Edit</button>
                            <button class="btn-danger text-white px-3 py-1 rounded text-sm" onclick="deleteSampah('${item.id}')">Hapus</button>
                        </td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
            updateDashboard();
            updateChart();
        }

        // Fungsi untuk update dashboard
        function updateDashboard() {
            const totalVolume = sampahData.reduce((sum, item) => sum + item.volume, 0);
            const daurUlangVolume = sampahData.filter(item => item.status === 'Didaur Ulang').reduce((sum, item) => sum + item.volume, 0);
            document.getElementById('total-sampah').textContent = totalVolume;
            document.getElementById('daur-ulang').textContent = daurUlangVolume;
        }

        // Fungsi untuk update chart
        function updateChart() {
            const jenisCount = {};
            sampahData.forEach(item => {
                jenisCount[item.jenis] = (jenisCount[item.jenis] || 0) + item.volume;
            });
            const labels = Object.keys(jenisCount);
            const data = Object.values(jenisCount);
            sampahChart.data.labels = labels;
            sampahChart.data.datasets[0].data = data;
            sampahChart.update();
        }

        // Modal functions
        function openModal(action, id = null) {
            const modal = document.getElementById('modal');
            const title = document.getElementById('modal-title');
            const form = document.getElementById('sampah-form');
            const submitBtn = document.getElementById('modal-submit');
            
            if (action === 'add') {
                title.textContent = 'Tambah Sampah Baru';
                form.reset();
                document.getElementById('sampah-id').value = '';
                submitBtn.textContent = 'Tambah';
            } else if (action === 'edit') {
                title.textContent = 'Edit Sampah';
                const item = sampahData.find(s => s.id === id);
                if (item) {
                    document.getElementById('sampah-id').value = item.id;
                    document.getElementById('jenis').value = item.jenis;
                    document.getElementById('volume').value = item.volume;
                    document.getElementById('lokasi').value = item.lokasi;
                    document.getElementById('status').value = item.status;
                }
                submitBtn.textContent = 'Update';
            }
            
            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // Fungsi submit form
        function submitForm() {
            const id = document.getElementById('sampah-id').value;
            const jenis = document.getElementById('jenis').value;
            const volume = parseInt(document.getElementById('volume').value);
            const lokasi = document.getElementById('lokasi').value;
            const status = document.getElementById('status').value;

            if (!jenis || !volume || !lokasi || !status) {
                alert('Semua field harus diisi!');
                return;
            }

            if (id) {
                // Edit
                const index = sampahData.findIndex(s => s.id === id);
                if (index !== -1) {
                    sampahData[index] = { id, jenis, volume, lokasi, status };
                }
            } else {
                // Add
                const newId = '00' + nextId;
                sampahData.push({ id: newId, jenis, volume, lokasi, status });
                nextId++;
            }

            closeModal();
            loadTable();
        }

        function deleteSampah(id) {
            if (confirm('Apakah Anda yakin ingin menghapus sampah ini?')) {
                sampahData = sampahData.filter(s => s.id !== id);
                loadTable();
            }
        }

        // Inisialisasi chart
        const ctx = document.getElementById('sampahChart').getContext('2d');
        const sampahChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Volume Sampah (Ton)',
                    data: [],
                    backgroundColor: 'rgba(16, 185, 129, 0.6)',
                    borderColor: 'rgba(16, 185, 129, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Load tabel saat halaman dimuat
        document.addEventListener('DOMContentLoaded', loadTable);
    </script>
</body>
</html>
