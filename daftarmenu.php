
<?php 
require 'koneksi.php';
$daftarmenu = query("SELECT * FROM daftarmenu");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
    @font-face {
    font-family: 'MonaSans';
    src: url('../font/mona-sans.ttf') format('truetype');
    }

    body {
    font-family: 'MonaSans', sans-serif;
    }
    </style>
</head>
<body class=" bg-gradient-to-b from-gray-100 via-gray-200 to-gray-300 min-h-screen">
    <nav class="flex justify-center items-center h-20 bg-blue-700 mb-8">
        <h1 class="text-2xl font-bold text-white">Dashboard Daftar Menu</h1>
    </nav>

<div> </div>

<!-- tombol pencarian -->
<div style="margin-bottom: 20px;">
    <form class="form-inline" action="" method="post">
		<div class="form-group flex items-center">
                <input type="text" name="keyword" placeholder="Cari nama menu atau jenis menu..." 
                   class="border border-gray-300 px-3 py-2 rounded-l-lg focus:outline-none"
                   value="<?php echo htmlspecialchars($keyword ?? ''); ?>">
                        <button type="submit" name="search" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600">🔍
                        </button>
		</div>
	</form>
</div>

    <div class="px-20 w-8xl gap-4">
        <a href="create.php" class="bg-blue-500 rounded-sm p-2 text-white font-bold">Tambah</a>
            <table class="w-7xl mt-4 border border-gray-300 text-sm text-left text-gray-600 rounded-lg shadow-md" id="datatableid">
                <thead class="bg-gray-100 text-gray-800 font-semibold">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Jenis Menu</th>
                        <th class="border border-gray-300 px-4 py-2">Gambar</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Menu</th>
                        <th class="border border-gray-300 px-4 py-2">Harga</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    
                    <?php foreach($daftarmenu as $dm)  : ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-300 px-4 py-2"><?= $i; ?></td>
                            <td class="border border-gray-300 px-4 py-2 font-medium"><?= $dm["jenismenu"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="img/<?= $dm["foto"]; ?>" alt="<?= $dm["jenismenu"]; ?>" class="w-12 h-12 object-cover  mx-auto">
                            </td>
                            <td class="border border-gray-300 px-4 py-2"><?= $dm["namamenu"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $dm["harga"]; ?></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="read.php?id=<?= $dm['id']; ?>" class="bg-green-500 rounded-sm mb-2 p-2 text-white font-bold">Lihat</a>
                                <a href="update.php?id=<?= $dm['id']; ?>" class="bg-yellow-500 rounded-sm mb-2 p-2 text-white font-bold">Edit</a>
                                <a href="delete.php?id=<?= $dm['id']; ?>" class="bg-red-500 rounded-sm mb-2 p-2 text-white font-bold" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                </tbody>
            </table>

    </div>

</body>
</html>
